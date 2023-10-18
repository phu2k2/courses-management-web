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
     * @return HasMany<Topic>
     */
    public function topics(): HasMany
    {
        return $this->hasMany(Topic::class);
    }

    /**
     * @return float
     */
    public function getDiscountedPriceAttribute()
    {
        return $this->price * (1 - $this->discount / 100);
    }

    /**
     * @return string
     */
    public function getLanguageAttribute()
    {
        return match ((int) $this->languages) {
            1 => __('english_lang'),
            2 => __('vietnamese_lang'),
            default => '',
        };
    }

    /**
     * @return string
     */
    public function getLevelCourseAttribute()
    {
        return  match ((int) $this->level) {
            1 => __('beginner_level'),
            2 => __('intermediate_level'),
            3 => __('advanced_level'),
            default => '',
        };
    }

    /**
     * @return HasMany<Cart>
     */
    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class, 'course_id', 'id');
    }
}
