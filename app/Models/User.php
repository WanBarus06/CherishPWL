<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'hobby',
        'phone',
        'description',
        'profile_picture',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function savedArticles()
    {
        return $this->belongsToMany(Article::class, 'user_articles')->withTimestamps();
    }

    public function user()
{
    return $this->belongsTo(User::class);
}

public function article()
{
    return $this->belongsTo(Article::class);
}

public function parent()
{
    return $this->belongsTo(Comment::class, 'parent_id');
}

public function articles()
{
    return $this->hasMany(Bookmark::class);
}

public function replies()
{
    return $this->hasMany(Comment::class, 'parent_id');
}

public function scopeSearch($query, $search)
{
    return $query->where('first_name', 'like', '%'.$search.'%')
                 ->orWhere('email', 'like', '%'.$search.'%');
}
}
