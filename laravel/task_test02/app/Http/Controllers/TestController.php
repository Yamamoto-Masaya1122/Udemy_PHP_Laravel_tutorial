<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    public function index()
    {
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text', '=', 'bbb')->get(); //BuilderになっているとDBからデータを取れてきていない。途中。なので、->get()を追加して上げることでコレクション型にして上げる。
        $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')->select('id', 'text')->get();

        dd($values, $count, $first, $whereBBB, $queryBuilder);

        return view('tests.test', compact('values')); //変数ではなく文字列で渡す
    }
}
