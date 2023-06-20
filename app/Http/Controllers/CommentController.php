<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\CommentReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Support\Str;



class CommentController extends Controller
{

public function store(Request $request)
{
    $validatedData = $request->validate([
        'blog_id' => 'required|exists:blogs,id',
        'content' => 'required|string',
    ]);


   

    $comment = new Comment();
    $comment->blog_id = $validatedData['blog_id'];
    $comment->name = Auth::user()->name;
    $comment->content = $validatedData['content'];
    $comment->save();

    return redirect()->back()->with('success', 'Comment added successfully.');
}




public function show($id)
{
    $blog = Blog::with('comments')->findOrFail($id);

    return view('blog.show', ['blog' => $blog]);
}



///reply method
public function reply(Request $request, $comment_id)
{
    $validatedData = $request->validate([
        'blog_id' => 'required|exists:blogs,id',
        'content' => 'required|string',
    ]);
    $truncatedContent = Str::limit($validatedData['content'], 100);
    $reply = new CommentReply();
    $reply->blog_id = $validatedData['blog_id'];
    $reply->name = Auth::user()->name;
    $reply->content = $validatedData['content'];
    $reply->parent_id = $comment_id;
    $reply->save();

    return redirect()->back();
}

///replies fetching mth
public function showReplies($commentId)
{
    $comment = Comment::findOrFail($commentId);
    $replies = $comment->replies;

    return view('replies.index', compact('replies'));
}









///delete comment




// CommentController.php
public function destroy(Comment $comment)
{
    $comment->delete();

    return redirect()->back()->with('success', 'Comment deleted successfully');
}




/////////view replies

public function view_replies($id){

  

    $blog = Blog::find($id);

    if (!$blog) {
        return redirect()->back()->with('error', 'Blog not found.');
    }

    // Eager load comments with their associated replies
    $comments = Comment::with('comment_replies')->where('blog_id', $blog->id)->get();
    
    return view('blog.replies', compact('blog', 'comments'))->with('blog', $blog);

}

//edit comment

public function edit(Comment $comment)
{
    $blogs = Blog::where('status', 'approved')->paginate(10);
    return view('blog.commentedit', compact('comment'))->with('blogs',$blogs);
}


///update comment
public function update(Request $request, Comment $comment)
{
    $validatedData = $request->validate([
        'content' => 'required|string',
    ]);

    $comment->content = $validatedData['content'];
    $comment->save();

    return redirect('/blogs')->with('success', 'Comment updated successfully.');
}



public function xclusive(){
    $totalUsersWithLevelTwo = User::countUsersWithLevelTwo();
    $users = User::paginate(10); // Change 10 to the desired number of users per page

    return view('blog.xclusive', ['users' => $users])->with('totalUsersWithLevelTwo', $totalUsersWithLevelTwo);
    
}


public function updateLevel(User $user)
{
    $user->level_id = 2;
    $user->save();

    return redirect()->back()->with('success', 'User level updated successfully');
}


public function demoteLevel(User $user)
{
    $user->level_id = 1;
    $user->save();

    return redirect()->back()->with('success', 'User level demoted successfully');
}


///////search users

public function searchUsers(Request $request)
{
    $search = $request->input('search');
    $users = User::where('name', 'LIKE', "%$search%")
                ->orWhere('email', 'LIKE', "%$search%")
                ->paginate(10);

    if ($users->isEmpty()) {
        return redirect()->back()->with('message', 'No results found.');
    }

    return redirect()->back()->with('users', $users);
}
}
