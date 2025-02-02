<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'summary',
        'content',
        'category_id',
        'user_id',
        'is_hot',
        'is_trending',
    ];
    public function Category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
}
