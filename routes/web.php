<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BDController;
use App\Http\Controllers\BasketController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
//Route::get('/bdvase', [ContactController::class, 'bdvase'])
// ->name('bdvase');
Route::get('/bdpictures', [ContactController::class, 'bdpictures'])
    ->name('bdpictures');
//Route::get('/bdaccess', [ContactController::class, 'bdaccess'])
//->name('bdaccess');
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

//Route::get('/pictures',[ContactController::class, 'pictures'])
//->name('pictures');
//Route::get('/basket/index', [BasketController::class, 'index'])->name('basket.index');
//Route::get('/vase', function () {
// return view('inc/vase');
//})->name('vase');
//Route::get('/vase/{product}', [ContactController::class, 'vaseProduct'])
// ->name('vaseProduct');
//Route::get('/messagesVasas', [BDController::class,'messagesVasas'])
//->name('messagesVasas');
Route::get('/allDataVasas', [BDController::class, 'allDataVase'])
    ->name('allDataVase');

Route::get('/admin', [ContactController::class, 'admin'])
    ->name('admin');

//Route::post('/bdvase/submit', [BDController::class, 'submitVase'])
// ->name('admin-form-bdvase');
Route::post('/bdpictures/submit', [BDController::class, 'submitPictures'])
    ->name('admin-form-pictures');
//Route::post('/bdacess/submit', [BDController::class, 'submitAccess'])
//  ->name('admin-form-access');


Route::get('/contact/all/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-update');
Route::post('/contact/all/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');

Route::get('/contact/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-one');

Route::get('/contact/all/{id}/delete', [ContactController::class, 'deleteMessage'])->name('contact-delete');

Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact-data');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');


//Route::get('/one-message-lamp/{id}', [BDController::class, 'showOneMessageLamp'])->name('one-message-lamp');
Route::get('/one-message-picture/{id}', [BDController::class, 'showOneMessagePicture'])
    ->name('one-message-picture');
//Route::get('/one-message-vase/{id}', [BDController::class, 'showOneMessageVase'])
// ->name('one-message-vase');

//Корзина!!!
Route::post('/basket/add/{id}', [BasketController::class, 'add'])
    ->where('id', '[0-9]+')
    ->name('basket.add');
Route::patch('/basket/update', [BasketController::class, 'update']);
Route::delete('/basket/remove', [BasketController::class, 'remove']);
Route::get('basketcheckout',[BasketController::class,'checkout'])->name('basketchekout');
Route::post('/basket/saveorder', [BasketController::class,'saveOrder'])->name('basket.saveorder');
//Route::get('/adminOrders', [BDController::class, 'adminOrders'])
//    ->name('adminOrders');

Route::resource('admin_orders', \App\Http\Controllers\AdminOrderController::class);
