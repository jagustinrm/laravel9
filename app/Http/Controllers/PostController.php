<?php
 namespace App\Http\Controllers;
 use App\Models\Post;
 use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// MIGRACIONES: clases de php que nos permiten recrear esquemas de base de datos. 
 class PostController extends Controller {
   public function index() {

     $posts = Post::get();
     return view('posts.index', ['posts' => $posts]);  
   }
// get(), find($id), $post->save(), $post->delete()
// php artisan tinker para utilizarlos


// Esto es lo que hace Laravel detrás de escena:
  //  public function show($post) {

  //   return Post::findOrFail($post);
  //  }

   public function show( Post $post) {
   
    return view('posts.show', ['post'=> $post]);
   }

 public function create() {
  return view('posts.create');
 }
 public function store(Request $request) {
$request->validate([
  'title' => ['required'],
  'body' => ['required'],
]);

  $post = new Post;
  $post->title = $request->input('title');
  $post->body = $request->input('body');
  $post->save();
  session()->flash('status', 'Post created!');
  return redirect()->route('posts.index');
 }
 }


//  Esto iba don dice DB:

//  [
//          ['title' => 'First post'],
//          ['title' => 'Second post'],
//          ['title' => 'Third post']
//  ]; 
 
?>

