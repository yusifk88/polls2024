<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::get('/', function () {
    $user = Auth::user();

    return view('welcome',["user"=>$user]);

});
