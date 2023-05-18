<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContentSlug;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', 0)->get();

        $contentInfos = ContentSlug::select('id','title','status')
            ->get();

        foreach ($contentInfos as $contentInfo) {
            $contentInfo->contents = $contentInfo->contents()->get();
        }

        
        return view('home', compact('categories','contentInfos'));
    }
}
