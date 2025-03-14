<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    $file = request()->file('file');
    $file_path = $file->store('uploads','public');
    dd($file_path);
});

Route::get('/upload_file',function(){
    return view('upload_file');
});
