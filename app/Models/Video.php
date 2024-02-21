<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        "teacher_id",
        "teacher_name",
        "classroom",
        "video_name",
        "video_url",
        "purchase_count",
        "price",
        "status",
        "max_watch",
    ];
}
