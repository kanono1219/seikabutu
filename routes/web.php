<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;  //外部にあるEventControllerクラスをインポート。
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EventController::class, 'index']);
// Route::リクエスト方式('URI', [コントローラー名::class, 'メソッド'])
Route::get('/events/create', [EventController::class, 'create']); //投稿フォームの表示
Route::post('/events', [EventController::class, 'store']);//画像を含めた投稿の保存処理
Route::get('/events/{event}', [EventController::class ,'show']); //投稿詳細画面の表示
Route::get('/events/{event}/edit', [EventController::class, 'edit']);//投稿編集画面表示
Route::put('/events/{event}', [EventController::class, 'update']);//投稿編集実行
Route::get('/categories/{category}', [CategoryController::class,'index']);//カテゴリーごとの投稿一覧表示
Route::delete('/events/{event}', [EventController::class,'delete']);//投稿編集実行
// '/events/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/events', [EventController::class, 'index']);   