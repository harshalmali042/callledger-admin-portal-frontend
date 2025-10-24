<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/dashboard', function () {
    return view('layouts.pages.dashboard');
});
Route::get('/clients', function () {
    return view('layouts.pages.client');
});
Route::get('/partners', function () {
    return view('layouts.pages.partner');
});
Route::get('/clientdetail', function () {
    return view('layouts.pages.clientdetail');
});

Route::get('/editclient', function () {
    return view('layouts.pages.editclient');
});

Route::get('/editpartner', function () {
    return view('layouts.pages.editpartner');
});



