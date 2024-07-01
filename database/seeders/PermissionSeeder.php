<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $role_admin = Role::UpdateOrCreate([
            'name' => 'admin',
        ],
        ['name' => 'admin']
        );

        $permission = Permission::updateOrCreate(
            [
            'name' => 'admin',
            ],
            ['name' => 'admin']
        );


        $role_admin-> givePermissionTo($permission);

        $user = User::find(1);

        $user->assignRole('admin');
    }


}
