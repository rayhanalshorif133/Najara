<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\ContentSlug;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search($search_key = null)
    {


        if ($search_key == null) {
            return redirect()->route('home');
        }

        $title = "Search";
        $categories = Category::where('parent_id', 0)->get();

        $contentInfos = Content::select('*')
            ->where('title', 'like', '%' . $search_key . '%')
            ->with('category', 'ContentSlug')
            ->get();


        return view('search.index', compact('categories', 'contentInfos', 'title', 'search_key'));
    }
}
