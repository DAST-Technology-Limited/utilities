<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable=[
        'blog_id',
        'name',
        'content',
        'parent_id'
        



    ];
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function comment_replies()
    {
        return $this->hasMany(CommentReply::class,'blog_id');
    }

  

    public function replyCount()
    {
        return $this->comment_replies()->count();


    }
}

