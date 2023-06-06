<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CMSAddGame;
use App\Models\GameCategory;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', 0)->get();
        $title = 'Category';
        return view('category.index', compact('categories', 'title'));
    }

    public function category_selected($id)
    {
        $categories = GameCategory::select('*')
            ->where('status', 1)
            ->get();

        $contentInfos = CMSAddGame::select('*')
            ->where('status', 1)
            ->where('type', 'HTML5')
            ->where('cat_id', $id)
            ->orderBy('id', 'desc')
            ->with('category')
            ->get();

        $title = 'Category Selected';
        $categoryName = GameCategory::select('name')
            ->where('id', $id)->first();

        return view('category.selected', compact('categories', 'title', 'contentInfos', 'categoryName'));
    }
}
