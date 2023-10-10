<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'email',
        'password',
        'is_active',
        'role_id',
    ];

    protected $attributes = [
        'is_active' => 'false',
        'role_id' => 1
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne<\App\Models\Profile>
     */
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class, 'user_id');
    }
}
