<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CMSAddGame;
use App\Models\Content;
use App\Models\ContentSlug;
use App\Models\GameCategory;
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
        $categories = GameCategory::select('*')
            ->where('status', 1)
            ->get();

        $contentInfos = CMSAddGame::select('*')
            ->where('status', 1)
            ->where('game_name', 'like', '%' . $search_key . '%')
            ->where('type', 'HTML5')
            ->orderBy('id', 'desc')
            ->with('category')
            ->get();

        return view('search.index', compact('categories', 'contentInfos', 'title', 'search_key'));
    }
}
