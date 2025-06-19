<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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
