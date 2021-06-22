<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\HomeController;
// PEGAWAI
use \App\Http\Controllers\PegawaiController;
use \App\Http\Controllers\PgwController;
use \App\Http\Controllers\RestockController;
use \App\Http\Controllers\PesananController;
use \App\Http\Controllers\DeliveryController;
use \App\Http\Controllers\ProductController;

use \App\Http\Controllers\User;
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
        return redirect()->route('user.product.index');
        //  view('user.user - home page');
    });

    Route::get('/homepage', function () {
        return view('user.user - HOMEPAGE');
    });

    Route::get('/delivery', [User\OrderController::class, 'delivery'])->name('user.delivery.index');

    Route::get('/order', function () {
        return view('user.order.index');
    })->name('user.order.index');

    Route::prefix('product')->group(function () {
        Route::get('/', [User\OrderController::class, 'product'])->name('user.product.index');
    });

    Route::prefix('payment')->group(function () {
        Route::get('/', [User\OrderController::class, 'payment'])->name('user.payment.index');
        Route::put('/{id}', [User\OrderController::class, 'paymentUpdate'])->name('user.payment.update');
        Route::get('/thanks', [User\OrderController::class, 'paymentAfter'])->name('user.payment.afterform');
    });

    Route::resource('order', User\OrderController::class)->names('user.order');
    // Route::get('/product', function () {
    //     return view('user.product.index');
    // })->name('user.product.index');

    // Route::get('/payment/thanks', function () {
    //     return view('user.payment.afterform');
    // })->name('user.payment.afterform');

    Route::get('/katalog', function () {
        return view('user.user-katalog');
    });
});

Route::prefix('pgw')->middleware(['auth', 'pgw'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('pgw.product.index');
    })->name('pgwIndex');

    Route::get('/index', function () {
        return redirect()->route('pgw.product.index');
    });

    // DELIVERY
    Route::resource('delivery', DeliveryController::class)->names('pgw.delivery');

    // PEGAWAI
    Route::resource('pegawai', PgwController::class)->names('pgw.pgw');
    Route::post('pegawai/{id}', [PgwController::class, 'on'])->name('pgw.pgw.on');

    // PESANAN
    Route::resource('pesanan', PesananController::class)->names('pgw.pesanan');
    // Route::prefix('pesanan')->group(function () {
    //     // Route::get('/', [User\OrderController::class, 'payment'])->name('user.payment.index');
    //     Route::put('/{id}', [User\PesananController::class, 'paymentUpdate'])->name('pgw.pesanan.update');
    // });

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


Route::get('/{any}', function () {
    return redirect()->route('landingpage');
})->where('any', '.*');
