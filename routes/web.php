<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

Route::view('/contact', 'contact') ->name('contact')-> middleware('auth');

// Crear un controlador en la terminal: 'php artisan make:controller PostController -i (invocable en este caso)
// Crear un controlador en la terminal: 'php artisan make:controller PostController -r (resource, que contendrá los 7 métodos REST)
// // Crear un controlador en la terminal: 'php artisan make:controller PostController -api (5 métodos)
// // Crear un controlador en la terminal: 'php artisan make:controller PostController (control vacío)


Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
// para que funcione index y show hay que crear el método en el controlador
// hay que utilizar parámetros de rutas, con llaves simples ni el signo $
// {post} acepta cualquier variable

            // RUTAS DE BLOG, es lo mismo que lo de abajo

// Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('blog/create', [PostController::class, 'store'])->name('posts.store');
// Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// // PUT es para reemplazar y patch para actualizar
// Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

// le podemos pasar un parámetro de configuración. Cambiar el nombre de ruta por "posts" y el parámetro {blog} por {post}
Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters'=> ['blog'=>'post']
]);

//VERIFICAR LAS RUTAS CON php artisan route:list --path=blog


Route::view('/about', 'about')->name('about'); 

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::view('/register', 'auth.register')->name('register');
// Lo que está entre corchetes es un controlador. php artisan make: controller Auth/RegisteredUserController
Route::post('/register', [RegisteredUserController::class, 'store']);