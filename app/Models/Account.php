<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $fillable = [
        "id",
        "first_name",
        "middle_name",
        "last_name",
        "username",
        "email",
        "password"
    ];
}
