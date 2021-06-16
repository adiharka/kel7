<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PegawaiController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\PgwController;
use \App\Http\Controllers\RestockController;
use \App\Http\Controllers\PesananController;
use \App\Http\Controllers\DeliveryController;
use \App\Http\Controllers\ProductController;
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


Route::get('/', function () {
    return view('user.index');
})->name('landingpage');

Route::prefix('user')->middleware(['auth', 'user'])->group(function () {
    Route::get('/home', function () {
        return view('user.index');
    })->name('userIndex');

    Route::get('/login', function () {
        return view('user.user - form login');
    });

    Route::get('/payment/confirm', function () {
        return view('user.payment.confirmation');
    })->name('user.payment.confirmation');

    Route::get('/regist', function () {
        return view('user.user - form regist');
    });

    Route::get('/', function () {
        return view('user.user - home page');
    });

    Route::get('/homepage', function () {
        return view('user.user - HOMEPAGE');
    });

    Route::get('/delivery', function () {
        return view('user.delivery.index');
    })->name('user.delivery.index');

    Route::get('/order', function () {
        return view('user.order.index');
    })->name('user.order.index');

    Route::get('/payment', function () {
        return view('user.payment.index');
    })->name('user.payment.index');

    Route::get('/product', function () {
        return view('user.product.index');
    })->name('user.product.index');

    Route::get('/payment/thanks', function () {
        return view('user.payment.afterform');
    })->name('user.payment.afterform');

    Route::get('/katalog', function () {
        return view('user.user-katalog');
    });
});

Route::prefix('pgw')->middleware(['auth', 'pgw'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('pgw.pgw.index');
    })->name('pgwIndex');

    // DELIVERY
    Route::resource('delivery', DeliveryController::class)->names('pgw.delivery');

    // PEGAWAI
    Route::resource('pegawai', PgwController::class)->names('pgw.pgw');
    Route::post('pegawai/{id}', [PgwController::class, 'on'])->name('pgw.pgw.on');

    // PESANAN
    Route::resource('pesanan', PesananController::class)->names('pgw.pesanan');

    // RESTOCK
    Route::resource('product/restock', RestockController::class)->names('pgw.restock');

    // PRODUCT
    Route::resource('product', ProductController::class)->names('pgw.product');
    Route::prefix('product')->group(function () {
        Route::get('/stok', [ProductController::class, 'restock'])->name('pgw.product.stok');
        Route::put('/stok', [ProductController::class, 'restockUpdate'])->name('pgw.product.restockUpdate');
    });

    Route::get('/login', function () {
        return view('pgw.formlogin');
    });

    Route::get('/homepage', function () {
        return view('pgw.pgw - HOMEPAGE');
    });

    Route::get('/login2', function () {
        return view('pgw.login');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/home');
});
