<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'courses';

    protected $fillable = [
        'title',
        'introduction',
        'price',
        'discount',
        'category_id',
        'instructor_id',
        'trailer_url',
        'average_rating',
        'total_students',
        'total_lessons',
        'languages',
        'level',
        'poster_url',
        'total_time',
        'description',
        'is_active',
    ];

}
