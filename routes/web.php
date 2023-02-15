<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
// EJEMPLO 1 BLOG   
// $posts = [
// ['title' => 'First post'],
// ['title' => 'Second post'],
// ['title' => 'Third post']
// ];
// Route::view('/blog', 'blog', ['posts'=> $posts])->name('blog');

// EJEMPLO 2 BLOG

// Route::get('/blog', function() {
//     $posts = [
//         ['title' => 'First post'],
//         ['title' => 'Second post'],
//         ['title' => 'Third post']
//         ];
//         return view('blog', ['posts' => $posts]);

// })->name('blog');

Route::view('/', "welcome")-> name('welcome');

Route::view('/contact', 'contact') ->name('contact');

// Crear un controlador en la terminal: 'php artisan make:controller PostController -i (invocable en este caso)
// Crear un controlador en la terminal: 'php artisan make:controller PostController -r (resource, que contendrá los 7 métodos REST)
// // Crear un controlador en la terminal: 'php artisan make:controller PostController -api (5 métodos)
// // Crear un controlador en la terminal: 'php artisan make:controller PostController (control vacío)


Route::get('/blog', [PostController::class, 'index'])->name('blog');

Route::view('/about', 'about')->name('about');