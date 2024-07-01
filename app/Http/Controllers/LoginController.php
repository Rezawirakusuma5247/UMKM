<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function index() {
        return view ('auth.login');

    }

    public function login_proses(Request $request) {
        $request->validate ([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' =>$request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('apa.welcome');
        }else{
            return redirect()->route('login')->with('failed','Email atau Password salah');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('sucses','Kamu berhasil logout');
    }

    public function register()
{
    $users = User::all();
    return view('auth.register', compact('users'));
}

public function register_proses(Request $request) {
    $request->validate([
        'nama' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    $data = [
        'name' => $request->nama,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ];

    User::create($data);

    $login = [
        'email' => $request->email,
        'password' => $request->password
    ];

    if (Auth::attempt($login)) {
        return redirect()->route('login');
    } else {
        return redirect()->route('login')->with('failed', 'Email atau Password salah');
    }
}

}
