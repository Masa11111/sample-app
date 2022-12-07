<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('user/list',[UserController::class, 'getIndex'] );

Route::group(['prefix' => 'user'], function(){
    Route::get('list', [UserController::class, 'getIndex']);//一覧表示
    Route::get('new', [UserController::class, 'new_index']);//新規登録
    Route::patch('new', [UserController::class, 'new_confirm']);//登録内容確認
    Route::post('new', [UserController::class, 'new_finish']);//完了

    Route::get('edit/{id}', [UserController::class, 'edit_index']);//編集
    Route::patch('edit/{id}', [UserController::class, 'edit_confirm']);//編集内容確認
    Route::post('edit/{id}', [UserController::class, 'edit_finish']);//更新

    Route::get('detail/{id}', [UserController::class, 'detail_index']);//詳細表示

    Route::post('delete/{id}', [UserController::class, 'delete_index']);
});