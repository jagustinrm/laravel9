<?php

use Illuminate\Support\Facades\Route;


Route::view('/', "welcome")-> name('welcome');

Route::view('/contact', 'contact') ->name('contact');

Route::view('/blog', 'blog')->name('blog');

Route::view('/about', 'about')->name('about');