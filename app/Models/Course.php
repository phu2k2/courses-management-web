<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

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
        'num_reviews',
        'total_students',
        'total_lessons',
        'languages',
        'level',
        'poster_url',
        'total_time',
        'description',
        'learns_description',
        'requirements_description',
        'is_active',
    ];

    /**
     * @return BelongsTo<Category, Course>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * @return HasMany<Cart>
     */
    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class, 'course_id', 'id');
    }
}
