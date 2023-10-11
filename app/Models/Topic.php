<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'topics';

    protected $fillable = ['name'];

    /**
     * Get the lessons for the topic.
     */
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }
}
