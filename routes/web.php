<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('install', function () {
        return view('theme::install');
    })->name('install');

    Route::get('theme', function () {
        return view('theme::index');
    })->name('theme.welcome');
});
