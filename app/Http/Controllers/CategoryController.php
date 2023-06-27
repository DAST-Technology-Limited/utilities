<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    
        $category = new Category();
        $category->name = $validatedData['name'];
    
        $description = $validatedData['description'];
        $words = str_word_count($description, 1);
        $limitedDescription = implode(' ', array_slice($words, 0, 20));
        $category->description = $limitedDescription;
    
        $category->save();
    
        session()->flash('message', 'Category created successfully.');
    
        return redirect('/create');
    }
    

}
