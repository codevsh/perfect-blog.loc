<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $guarded = false;
    protected $withCount = ['LikedUsers'];
    protected $with = ['category'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags', 'article_id', 'tag_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }
    public function likedUsers()
    {
        return $this->belongsToMany(User::class, 'article_user_likes', 'article_id', 'user_id');
    }
}
