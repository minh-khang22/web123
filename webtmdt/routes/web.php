<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});
// phần ví dụ
Route::get('/vidu', [
    BookController::class,
    'vidu'
]);
Route::get('/tinhtong', [
    BookController::class,
    'tinhtong'
]);

Route::get('/qlsach/theloai', [
    BookController::class,
    'laythongtintheloai'
]);

Route::get('/qlsach/thongtinsach', [
    BookController::class,
    'laythongtinsach'
]);

Route::get('/qlsach/thongtinthemsach', [
    BookController::class,
    'thongtinthemsach'
]);

Route::get('/qlsach/themsach', [
    BookController::class,
    'themsach'
]);

Route::get('/qlsach/thongtinthem1sach', [
    BookController::class,
    'thongtinthem1sach'
]);

Route::get('/qlsach/them1sach', [
    BookController::class,
    'them1sach'
]);

Route::get('/trang1','App\Http\Controllers\ViduLayoutController@trang1');

Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');

Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');

Route::get('/sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet');