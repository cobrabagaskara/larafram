<?php

use Illuminate\Support\Facades\Route;

Route::prefix('billing')->group(function() {
    Route::get('/', function() {
        return 'Hello from Billing module';
    });
});