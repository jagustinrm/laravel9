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


Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
// para que funcione index y show hay que crear el método en el controlador
// hay que utilizar parámetros de rutas, con llaves simples ni el signo $
// {post} acepta cualquier variable
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('blog/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::view('/about', 'about')->name('about');