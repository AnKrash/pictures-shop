<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BDController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/bdvase',[ContactController::class,'bdvase'])
->name('bdvase');
Route::get('/bdpictures',[ContactController::class,'bdpictures'])
    ->name('bdpictures');
Route::get('/bdaccess',[ContactController::class,'bdaccess'])
    ->name('bdaccess');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/basket', function () {
    return view('basket');
})->name('basket');
//Route::get('/pictures',[ContactController::class, 'pictures'])
//->name('pictures');

Route::get('/pictures',[BDController::class, 'allDataPictures'])
->name('allDataPictures');


Route::get('/lamps', [BDController::class, 'allDataLamps'])
->name('allDataLamps');


//Route::get('/vase', function () {
   // return view('inc/vase');
//})->name('vase');
//Route::get('/vase/{product}', [ContactController::class, 'vaseProduct'])
  // ->name('vaseProduct');
Route::get('/allDataVasas', [BDController::class, 'allDataVase'])
  ->name('allDataVase');

//Route::get('/messagesVasas', [BDController::class,'messagesVasas'])
    //->name('messagesVasas');


Route::get('/admin', [ContactController::class, 'admin'])
    ->name('admin');

Route::post('/bdvase/submit', [BDController::class, 'submitVase'])
    ->name('admin-form-bdvase');
Route::post('/bdpictures/submit', [BDController::class, 'submitPictures'])
    ->name('admin-form-pictures');
Route::post('/bdacess/submit', [BDController::class, 'submitAccess'])
    ->name('admin-form-access');


Route::get('/contact/all/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-update');
Route::post('/contact/all/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');

Route::get('/contact/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-one');

Route::get('/contact/all/{id}/delete', [ContactController::class, 'deleteMessage'])->name('contact-delete');

Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact-data');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');

Route::get('/one-message-lamp/{id}', [BDController::class, 'showOneMessageLamp'])->name('one-message-lamp');
Route::get('/one-message-picture/{id}', [BDController::class, 'showOneMessagePicture'])->name('one-message-Picture');
Route::get('/one-message-vase/{id}', [BDController::class, 'showOneMessageVase'])->name('one-message-vase');
