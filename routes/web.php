<?php

use Illuminate\Support\Facades\Route;

Route::get('/note', function () {
    return response()->json(['message' => 'Welcome ',
'note'=> 'sanjid bhalo manus noi sha  kesu din dore bhalo babe kaj korcha naa',
'id'=>1,


]);


});
