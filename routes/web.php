<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['content' => 'beranda']);
});

Route::get('/dokumentasi', function () {
    return view('index', ['content' => 'dokumentasi']);
});

Route::get('/panitia', function () {
    return view('index', ['content' => 'panitia']);
});

Route::get('/faq', function () {
    return view('index', ['content' => 'faq']);
});

Route::get('/asaspelaksanaan', function () {
    return view('index', ['content' => 'asaspelaksanaan']);
});

Route::get('/landasan', function () {
    return view('index', ['content' => 'landasan']);
});

Route::get('/latarbelakang', function () {
    return view('index', ['content' => 'latarbelakang']);
});

Route::get('/logo', function () {
    return view('index', ['content' => 'logo']);
});

Route::get('/panitia', function () {
    return view('index', ['content' => 'panitia']);
});

Route::get('/tujuan', function () {
    return view('index', ['content' => 'tujuan']);
});


