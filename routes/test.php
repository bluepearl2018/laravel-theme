<?php

use Eutranet\Theme\Http\Controllers\FormTesterController;

Route::prefix('theme/components')
    ->name('theme.components.')
    ->middleware('web')
    ->group(function () {

    /**
     * ------------------------------------
     * COMPONENTS
     * ------------------------------------
     */
        Route::get('auth', function () {
            return view('theme::collections.auth-test');
        })->name('auth');

        Route::get('errors', function () {
            return view('theme::collections.errors-test');
        })->name('errors');

        Route::post('test-validation-errors', [
        FormTesterController::class, 'testValidationErrors'
    ])->name('test-validation-errors');

        Route::get('flash', function () {
            return view('theme::collections.flash-test');
        })->name('flash');

        Route::post('test-flash', [
        FormTesterController::class, 'testFlash'
    ])->name('test-flash');
    });
