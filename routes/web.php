<?php

use Illuminate\Support\Facades\Route;

Route::get('/note', function () {
    return response()->json(['message' => 'Welcome to Laravel API']);


});
