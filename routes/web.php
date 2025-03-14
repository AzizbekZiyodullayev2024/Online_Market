<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('Auth.login');
});

Route::get('/register', function () {
    return view('Auth.register');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::post('/upload_file',function(){
    $request = $request();
    $file = $request->file('file');
    dd($file);
});

Route::get('/upload_file',function(){
    return view('upload_file');
});