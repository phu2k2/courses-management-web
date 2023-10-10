<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "lessons";

    protected $fillable = [
        'title',
        'lesson_duration',
        'topic_id',
        'lesson_url',
    ];
}
