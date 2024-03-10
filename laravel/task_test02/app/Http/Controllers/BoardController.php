<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    public function index()
    {
        // Eloquent(エロクアント)
        $values = Board::all();

        $count = Board::count();

        $first = Board::findOrFail(1);

        $whereBBBB = Board::where('body', '=', 'bbbb')->get();


        dd($values, $count, $first, $whereBBBB);

        return view('boards.board', compact('values'));
    }
}
