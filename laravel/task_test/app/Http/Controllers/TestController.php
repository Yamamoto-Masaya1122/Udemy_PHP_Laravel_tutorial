<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {

        // Eloquent(エロクアント)
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        // whereの場合は、getメソッドをつけないとデータを取ってこれない。その時はbuilder型で表示される。(クエリの途中ということ)
        $whereAAA = Test::where('text', '=', 'aaa')->get();

        // クエリビルダ
        $queryBuilder = DB::table('tests')->where('text', '=' , 'aaa')
        ->select('id', 'text')
        ->get();

        dd($values, $count, $first, $whereAAA, $queryBuilder);

        return view('tests.test', compact('values'));
    }
}
