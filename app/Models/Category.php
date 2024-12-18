<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory; //örnek veriler oluşturmak için kullanılır
    protected $fillable = ['name','slug']; //hangi alanların toplu olarak veri girişine izin vermek istersek kullanırız.sadece belirtilen alanlar doldurulur.
    public function Posts()
    {
        return $this->hasMany(Post::class);
    }
}
