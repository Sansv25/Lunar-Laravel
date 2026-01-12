<?php

use Illuminate\Support\Facades\Route;

//nomor 1
Route::get('/profil', function () {
    return 'profil siswa';
});

//nomor 2
Route::get('/siswa/{nama}', function ($nama) {
    return $nama;
});

//nomor 3
Route::get('/kelas/{nama?}', function ($nama = 'sanjaya') {
    return 'nama siswa adalah ' . $nama;
});

//nomor 4
Route::get('/nilai/{angka}', function ($angka) {
    return "Menampilkan nilai $angka";
})->where('angka', '[0-9]|[1-9][0-9]|100');

//nomor 5
route::get('/dashboard', function(){
    return 'ini adalah halaman dashboard';
});


Route::redirect('/home', '/dashboard');
//nomor 6
Route::prefix('/admin')->group(function(){
    Route::get('/login', function(){
        return 'ini adalah halaman login admin';
    });
    Route::get('/dashboard', function(){
        return 'ini adalah halaman dashboard admin';
    });
});

//nomor 7
Route::fallback(function(){
    return 'halaman tidak ditemukan';
});
//nomor 8
Route::get('produk/detail', function() {
    return 'ini adalah halaman detail produk';
});

Route::get('produk/{id}', function($id) {
    return 'ini adalah halaman detail produk ' . $id;
});
//nomor 9
Route::get('data-siswa', function() {
    return 'ini adalah halaman data siswa';
});

Route::get('data-guru', function() {
    return 'ini adalah halaman data guru';
});

//Cek route pakai terminal php artisan route:list
