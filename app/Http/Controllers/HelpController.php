<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    
    public function index()
    {
        $categories = Category::where('parent_id', 0)->get();
        $title = 'Help';
        return view('help.index', compact('categories', 'title'));
    }
}
