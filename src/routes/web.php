<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function() {
    return response()->json(\App\Models\User::all());
});

Route::get('users-list', function() {
   return response()->json(['msg' => 'testing endpoint 2']);
});
