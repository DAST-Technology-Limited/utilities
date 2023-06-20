<?php
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{




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

