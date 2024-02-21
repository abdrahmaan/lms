<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studient extends Model
{
    use HasFactory;

    protected $fillable = [

        "name",
        "phone",
        "parent_phone",
        "username",
        "password",
        "classroom",
        "area",
        "status",
        "assign_to",
        "assign_to_name",

    ];
}
