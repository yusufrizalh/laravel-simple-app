<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController'); 

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');   // membuka view create.blade.php 
Route::post('/posts/store', 'PostController@store');    // mengirim data ke database 

Route::get('/posts/{post:slug}', 'PostController@show'); 

Route::view('/kontak', 'kontak');
Route::view('/tentang', 'tentang');