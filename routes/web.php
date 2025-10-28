<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin-login', function () {
    return view('auth.login');
});

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
    return view('layouts.detailpages.clientdetail');
});
Route::get('/partnerdetail', function () {
    return view('layouts.detailpages.partnerdetail');
});

Route::get('/editclient', function () {
    return view('layouts.editpages.editclient');
});

Route::get('/editpartner', function () {
    return view('layouts.editpages.editpartner');
});
Route::get('/totalearn', function () {
    return view('layouts.pages.totalearn');
});
Route::get('/totalmember', function () {
    return view('layouts.pages.totalmember');
});
Route::get('/notification', function () {
    return view('layouts.pages.notification');
});

Route::get('/logout', function () {
    return view('layouts.pages.logout');
});
