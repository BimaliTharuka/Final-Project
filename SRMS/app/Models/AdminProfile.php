<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'name_with_initials',
        'contact_number',
        'address',
        'email',
        'date_of_birth',
        'gender',
        'department',
        'position',
        'join_date',
    ];
}

