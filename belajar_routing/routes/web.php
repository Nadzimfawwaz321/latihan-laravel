<?php
Route::get('/profil/{dlogok}', function ($dlogok) {
return view('profil', ['dlogok' => $dlogok]);
});

Route::get('/produk/{kategori}/{id}', function ($kategori, $id) {
return "Kategori: <b>$kategori</b> <br> ID Produk: <b>$id</b>";
});

use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', function () {
    return view('home');
});

// Route Parameter Tiket Wisata
Route::get('/tiket/{tempat}/{harga}', function ($tempat, $harga) {
    return view('tiket', [
        'tempat' => $tempat,
        'harga' => $harga
    ]);
});
