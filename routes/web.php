<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BDController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\AdminOrderController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/basket/index', [BasketController::class, 'index'])
    ->name('basket.index');

Route::get('/basket/checkout', [BasketController::class, 'checkout'])
    ->name('basket.checkout');


Route::get('/pictures', [BDController::class, 'allDataPictures'])
    ->name('allDataPictures');


Route::get('/lamps', [BDController::class, 'allDataLamps'])
    ->name('allDataLamps');


Route::get('/allDataVasas', [BDController::class, 'allDataVase'])
    ->name('allDataVase');

//Route::get('/admin', [ContactController::class, 'admin'])
//    ->name('admin')->middleware('auth');
//
//
//Route::post('/bdpictures/submit', [BDController::class, 'submitPictures'])
//    ->name('admin-form-pictures')->middleware('auth');;


Route::get('/contact/all/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-update');
Route::post('/contact/all/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');

Route::get('/contact/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-one');

Route::get('/contact/all/{id}/delete', [ContactController::class, 'deleteMessage'])->name('contact-delete');

Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact-data');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');


Route::get('/one-message-picture/{id}', [BDController::class, 'showOneMessagePicture'])
    ->name('one-message-picture');

//Корзина!!!
Route::post('/basket/add/{id}', [BasketController::class, 'add'])
    ->where('id', '[0-9]+')
    ->name('basket.add');
Route::patch('/basket/update', [BasketController::class, 'update']);
Route::delete('/basket/remove', [BasketController::class, 'remove']);
Route::get('basketcheckout', [BasketController::class, 'checkout'])->name('basketchekout');
Route::post('/basket/saveorder', [BasketController::class, 'saveOrder'])->name('basket.saveorder');
//Route::get('/adminOrders', [BDController::class, 'adminOrders'])
//  ->name('adminOrders');
//
//Route::get('admin_order', [\App\Http\Controllers\AdminOrderController::class, 'index'])
//    ->name('admin_order')->middleware('auth');;
//Route::get('show/{id}', [\App\Http\Controllers\AdminOrderController::class, 'show'])
//    ->name('show')->middleware('auth');;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

\Illuminate\Support\Facades\Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {

        Route::get('order', [\App\Http\Controllers\AdminOrderController::class, 'index'])
            ->name('admin_order');

        Route::get('admin_order/show/{id}', [\App\Http\Controllers\AdminOrderController::class, 'show'])
            ->name('admin_order.show');//!!!

        Route::post('/bdpictures/submit', [BDController::class, 'submitPictures'])
            ->name('/form-pictures');//!!!

        Route::get('/', [ContactController::class, 'admin'])
            ->name('admin');//!!!

        Route::get('/bdpictures', [ContactController::class, 'bdpictures'])
            ->name('bdpictures');//!!!
    });
});
