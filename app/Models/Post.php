<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','title','slug','content','is_published'];

    public function category()
    {
        return $this->belongsTo(Category::class);//modeller arası bağlantı kurma birden bire
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);//modeller arası bağlantı kurma çoktan çok
    }
}
