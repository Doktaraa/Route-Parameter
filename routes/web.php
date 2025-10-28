<?php

use Illuminate\Support\Facades\Route;

// Halaman awal
Route::get('/', function () {
    return view('welcome');
});

// Route dengan 1 parameter (contoh dari modul)
Route::get('/profil/{nama}', function ($nama) {
    return view('profil', ['nama' => $nama]);
});

// Route dengan 2 parameter (contoh tambahan dari modul)
Route::get('/produk/{kategori}/{id}', function ($kategori, $id) {
    return "Kategori: <b>$kategori</b> <br> ID Produk: <b>$id</b>";
});

// Route untuk tugas: Tiket Wisata
Route::get('/tiket/{tempat}/{harga}', function ($tempat, $harga) {
    return view('tiket', [
        'tempat' => $tempat,
        'harga' => $harga
    ]);
});
