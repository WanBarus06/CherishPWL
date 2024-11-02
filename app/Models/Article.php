<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'article_id',
        'image',
        'title',
        'excerpt',
        'body',
        'slug',
    ];

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function incrementViews()
    {
        $this->views++;
        $this->save();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, $search)
{
    return $query->where('title', 'like', '%'.$search.'%')
                 ->orWhere('excerpt', 'like', '%'.$search.'%');
}
}
