<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//HTTP 403
Route::get('/403', function () {return view('errors.403');})->name('403');
//HTTP 404
Route::get('/404', function () {return view('errors.404');})->name('404');
//HTTP 500
Route::get('/500', function () {return view('errors.500');})->name('500');

Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('beranda');
Route::get('/portofolio', [App\Http\Controllers\FrontendController::class, 'portofolio'])->name('portofolio');
Route::get('/desain', [App\Http\Controllers\FrontendController::class, 'desain'])->name('desain');
Route::get('/kontruksi', [App\Http\Controllers\FrontendController::class, 'kontruksi'])->name('kontruksi');
Route::get('/maket', [App\Http\Controllers\FrontendController::class, 'maket'])->name('maket');
Route::get('/portofolio/detail', [App\Http\Controllers\FrontendController::class, 'portofolioDetail'])->name('portofolio.detail');
Route::get('/orderDesain', [App\Http\Controllers\FrontendController::class, 'orderDesain'])->name('orderDesain');
Route::get('/orderKontruksi', [App\Http\Controllers\FrontendController::class, 'orderKontruksi'])->name('orderKontruksi');
Route::post('/orderPost', [App\Http\Controllers\FrontendController::class, 'orderPost'])->name('orderPost');
Route::get('/progresList', [App\Http\Controllers\FrontendController::class, 'progresList'])->name('progresList');
Route::get('/progres/{id}', [App\Http\Controllers\FrontendController::class, 'progres'])->name('progres');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::post('/contact_process', function () { return view('contact_process'); });

Auth::routes(['verify' => true]);


Route::group(['middleware' => ['auth', 'verified', 'status:1']], function () {
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //Route Admin dan Arsitek
    Route::group(['middleware' => ['auth', 'role:1,2']], function () {
        // Menu Profile
        Route::resource('/profile', App\Http\Controllers\ProfileController::class, ['only' => ['index', 'update']]);
        // Menu Progres
        Route::resource('/progres-desain', App\Http\Controllers\Admin\Progres\ProgresDesainController::class);
        Route::resource('/progres-kontruksi', App\Http\Controllers\Admin\Progres\ProgresKontruksiController::class);
        // Route::resource('/progres-maket', App\Http\Controllers\Admin\Progres\ProgresMaketController::class);
    });
    //Route Admin
    Route::group(['middleware' => ['auth', 'role:1']], function () {
        
        Route::resource('/kategori-tipe', App\Http\Controllers\Admin\TipeController::class);
        Route::resource('/kategori-model', App\Http\Controllers\Admin\KategoriModelController::class);

        // Menu Portofolio
        Route::resource('/portofolio-desain', App\Http\Controllers\Admin\Portofolio\PortofolioDesainBangunan::class);
        Route::resource('/portofolio-kontruksi', App\Http\Controllers\Admin\Portofolio\PortofolioKontruksiBangunan::class);
        // Route::resource('/portofolio-maket', App\Http\Controllers\Admin\Portofolio\PortofolioMaket::class);
        
        // Menu Pesanan
        Route::resource('/pesanan-desain', App\Http\Controllers\Admin\Pesanan\PesananDesainController::class);
        Route::resource('/pesanan-kontruksi', App\Http\Controllers\Admin\Pesanan\PesananKontruksiController::class);
        // Route::resource('/pesanan-maket', App\Http\Controllers\Admin\Pesanan\PesananMaketController::class);

        // Menu Validasi Pembayaran
        Route::resource('/pembayaran', App\Http\Controllers\PembayaranController::class);
        Route::get('/pembayaran-validasi', [App\Http\Controllers\PembayaranController::class, 'validasi'])->name('validasi-pembayaran');

        // Menu Setting
        Route::resource('/setting-akun', App\Http\Controllers\Admin\SettingAkunController::class);
        Route::resource('/setting-mandor', App\Http\Controllers\Admin\DataMandorController::class);
        Route::resource('/setting-pelanggan', App\Http\Controllers\Admin\DataPelangganController::class);
        Route::resource('/setting', App\Http\Controllers\Admin\SettingController::class);
    });

});
// Google login
Route::get('/login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

// Github login
// Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
// Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);






