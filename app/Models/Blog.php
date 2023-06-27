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

   // Blog.php (model)

public function categories()
{
    return $this->belongsToMany(Category::class, 'blog_category', 'blog_id', 'category_id');
}


// public function category()
// {
//     return $this->belongsTo(Category::class, 'category_id');
// }
// Blog.php (model)

public function getCategoryIdsAttribute()
{
    return $this->categories->pluck('id');
}


}
