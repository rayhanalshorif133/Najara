<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CMSAddGame;
use App\Models\ContentSlug;
use App\Models\GameCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Home";
        $categories = GameCategory::select('*')
            ->where('status', 1)
            ->get();
        $contentInfos = CMSAddGame::select('type')
            ->where('status', 1)
            ->where('type', 'HTML5')
            ->groupBy('type')
            ->get();

        foreach ($contentInfos as $contentInfo) {
            $contentInfo->contents = CMSAddGame::select('*')
                ->where('status', 1)
                ->where('type', 'LIKE', "%{$contentInfo->type}%")
                ->where('type', 'HTML5')
                ->orderBy('id', 'desc')
                ->with('category')
                ->get();
        }

        return view('home', compact('categories', 'contentInfos', 'title'));
    }
}
