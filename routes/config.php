<?php

Route::middleware(['web', 'auth:admin'])->get('/setup/theme/config', function () {
    return view('theme::config');
})->name('setup.theme.config');
