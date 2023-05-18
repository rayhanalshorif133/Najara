<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    
    public function index()
    {
        $categories = Category::where('parent_id', 0)->get();
        $title = 'Account';
        return view('account.index', compact('categories', 'title'));
    }
}
