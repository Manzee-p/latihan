<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Middleware\Admin;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return "ini halaman about";
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('produk/namaProduk', function ($p) {
    return "saya membeli" . $p;
});

Route::get('kategori/{namaKatgori}', function ($kategori) {
    return view('kategori', compact('kategori'));
});

Route::get('serch/{keyword?}', function ($key = null) {
    return view('serch', compact('key'));
});

Route::get('promo/{barang?}/{kode?}', function ($barang = null , $kode = null) {
    return view('promo', compact('barang','kode'));
});

Route::get('buku', [MyController::class, 'index']);
Route::get('buku/create', [MyController::class, 'create']);
Route::post('buku', [MyController::class, 'store']);
Route::get('buku/{id}', [MyController::class, 'show']);
Route::get('buku/{id}/edit', [MyController::class, 'edit']);
Route::post('buku/{id}', [MyController::class, 'update']);
Route::delete('buku/{id}', [MyController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', Admin::class]], function() {
    Route::get('/', [BackendController::class, 'index']); 

    Route::resource('/category', CategoryController::class);

    Route::resource('/product', ProductController::class);
});
