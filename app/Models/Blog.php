<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'title',
        'author',
        'body',
        'image',
        'category_id'



    ];


    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
{
    return $this->belongsToMany(Category::class, 'blog_category');
}

// public function category()
// {
//     return $this->belongsTo(Category::class, 'category_id');
// }


}
