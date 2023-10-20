<?php

namespace App\Models;

use AmazonS3;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'avatar',
        'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\User, \App\Models\Profile>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * avatar get from s3
     * @param string $value
     * @return string
     */
    public function getAvatarAttribute($value)
    {
        return AmazonS3::getObjectUrl($value);
    }
}
