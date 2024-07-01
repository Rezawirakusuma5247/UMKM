<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image'];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    // Event.php
public function approvedRegistrations()
{
    return $this->hasMany(Registration::class)->where('approved', true);
}

}
