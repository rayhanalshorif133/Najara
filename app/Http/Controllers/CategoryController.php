<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', 0)->get();
        $title = 'Category';
        return view('category.index', compact('categories', 'title'));
    }
}
