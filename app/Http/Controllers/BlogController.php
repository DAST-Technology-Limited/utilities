<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function index(Request $request)
    {
        $selectedCategoryId = $request->input('category');

        $query = Blog::query();
        
        if ($selectedCategoryId) {
            $query->whereHas('categories', function ($q) use ($selectedCategoryId) {
                $q->where('categories.id', $selectedCategoryId); // Specify the table name for 'id' column
            });
        }
        
        $blogs = $query->where('status', 'approved')->paginate(100);
        $categories = Category::all();
        

        return view('blog.index', compact('blogs', 'categories'));
    }


    public function blogs()
    {
        $blogs = Blog::where('status', 'approved')->paginate(10);

        return view('blog.blogs', compact('blogs'));
    }




    public function create()
    {
        $categories = Category::all();
        return view('blog.create', compact('categories'));
    }



    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $comments = Comment::where('blog_id', $id)->get();

        return view('blog.show', ['blog' => $blog, 'comments' => $comments]);
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'body' => 'required',
            'category_id' => 'required|array', // Make sure category_id is an array
            'category_id.*' => 'exists:categories,id', // Validate each category_id exists in the categories table
            'image' => 'required|image|max:2048',
        ]);
    
        // Get the authenticated user's ID
        $userId = Auth::id();
    
        // Store the image file
        $imagePath = $request->file('image')->store('blog_images', 'public');
    
        // Create a new blog instance with the validated data
        $blog = new Blog();
        $blog->user_id = $userId;
        $blog->title = $validatedData['title'];
        $blog->author = $validatedData['author'];
        $blog->body = $validatedData['body'];
        $blog->image = $imagePath;
        
        // Save the blog instance to the database
        if ($blog->save()) {
            // Attach the selected categories to the blog
            $blog->categories()->attach($validatedData['category_id']);
    
            // Success response
            return redirect('/admin')->with('message', 'Blog created successfully');
        } else {
            // Error response
            return response()->json(['error' => 'Failed to store the blog'], 422);
        }
    }
    





    public function destroy($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.'); // or handle the case when the blog post is not found
        }

        // Delete the blog post
        $blog->delete();

        return redirect('/admin')->with('success', 'Blog deleted successfully.');
    }



    public function edit($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.'); // or handle the case when the blog post is not found
        }

        return view('blog.edit', ['blog' => $blog]);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.'); // or handle the case when the blog post is not found
        }

        // Validate the request data
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // assuming image upload validation rules
        ]);

        // Update the blog post
        $blog->title = $request->input('title');
        $blog->author = $request->input('author');
        $blog->body = $request->input('body');

        if ($request->hasFile('image')) {
            // Process and store the updated image
            // Assuming you have a storage mechanism in place for the image
            $imagePath = $request->file('image')->store('images', 'public');
            $blog->image = $imagePath;
        }

        $blog->save();

        return redirect('/admin')->with('success', 'Blog updated successfully.');
    }

    
    
    public function admin()
    {
        $blogs = Blog::all();
        $categories = Category::all();
    
        return view('blog.admin', compact('blogs', 'categories'));
    }
    






    public function approve($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.'); // or handle the case when the blog post is not found
        }

        // Update the status to "approved"
        $blog->status = 'approved';
        $blog->save();

        return redirect('/admin')->with('success', 'Blog approved successfully.');
    }





    public function setPending($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.'); // or handle the case when the blog post is not found
        }

        // Update the status to "pending"
        $blog->status = 'pending';
        $blog->save();

        return redirect('/admin')->with('success', 'Blog set to pending successfully.');
    }


    ///liking and disliking of post
    public function like($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.');
        }

        if ($blog->dislikes > 0) {
            $blog->dislikes--;
        }

        $blog->likes++;
        $blog->save();

        return redirect()->back();
    }

    public function dislike($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.');
        }

        if ($blog->likes > 0) {
            $blog->likes--;
        }

        $blog->dislikes++;
        $blog->save();

        return redirect()->back();
    }
}
