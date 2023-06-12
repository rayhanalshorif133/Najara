<?php

namespace App\Http\Controllers;

use App\Models\CMSAddGame;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function playGame($id)
    {
        $game = CMSAddGame::select('html5_url')
            ->where('id', $id)
            ->first();
        $title = 'Play Game';
        return view('play.index', compact('game', 'title'));
    }
}
