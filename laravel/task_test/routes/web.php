<?php

// ルーティングの機能を使えるように読み込んでいる。
use Illuminate\Support\Facades\Route;
// ルーティングの定義によってTestControllerを呼び出すのに必要な記述。
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 今回はコントローラを使わずに、'/'にアクセスしたら、welcomeというviewを表示できるようになっている。
Route::get('/', function () {
    return view('welcome');
});

// tests/testのURLにアクセスするとTestControllerのindexアクションを呼び出す。
Route::get('tests/test', [TestController::class, 'index']);