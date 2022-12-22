<?php

use Illuminate\Support\Facades\Route;

use Reborn\Contact\Http\Controllers\ContactController;

Route::controller(ContactController::class)->group(function () {
   Route::get('contact', 'index')->name('contact');
   Route::post('contact', 'store')->name('contact.store');
});
