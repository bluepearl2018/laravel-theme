<?php

use Eutranet\Theme\Http\Controllers\ThemeController;

Route::middleware(['web', 'auth:admin'])->prefix('setup')->name('setup.')->group(function(){
	Route::resource('themes', ThemeController::class)->names('themes');
});