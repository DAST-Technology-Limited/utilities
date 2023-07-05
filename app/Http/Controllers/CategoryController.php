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
    $category->description = $validatedData['description'];
    $category->save();



    session()->flash('message', 'Category created successfully.');

    return redirect('/create');
}

}
