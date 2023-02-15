<?php
 namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

// MIGRACIONES: clases de php que nos permiten recrear esquemas de base de datos. 
 class PostController extends Controller {
   public function index() {
     $posts = DB::table('posts')->get();
        return view('blog', ['posts' => $posts]);  
   }

 }

?>

<!-- 
Esto iba don dice DB:

[
        ['title' => 'First post'],
        ['title' => 'Second post'],
        ['title' => 'Third post']
]; -->