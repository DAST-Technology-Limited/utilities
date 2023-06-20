<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    use HasFactory;
    
    protected $fillable=[
      
        'blog_id',
        'parent_id',
        'name',
        'content',
       



    ];
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
