<?php
 namespace App\Http\Controllers;
 use App\Models\Post;
 use Illuminate\Http\Request;
 use App\Http\Requests\SavePostRequest;
use Illuminate\Support\Facades\DB;

    // MIGRACIONES: clases de php que nos permiten recrear esquemas de base de datos. 
 class PostController extends Controller {

public function __construct() {
  //Esta función constructora permite que se exija login excepto en el login y show 
  $this->middleware('auth', ['except' => ['index', 'show']]);
}




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
  return view('posts.create', ['post' => new Post]);
 }
public function store(SavePostRequest $request) {
  //   $validated = $request->validate([
  //   'title' => ['required'],
  //   'body' => ['required'],
  // ]);
  // Ahora esto está en SavePostRequest
  
  // $post = new Post;
  // $post->title = $request->input('title');
  // $post->body = $request->input('body')  ;
  // $post->save();
  // LO DE ARRIBA ES LO MISMO QUE ESTO DE ABAJO POST::CREATE de Laravel
  Post::create($request->validated());

  return redirect()->route('posts.index')->with('status', 'Post created!');
 }


 public function edit(Post $post) {
   
  return view('posts.edit', ['post' => $post]);
 }
// Laravel inyecta el request 
 public function update(SavePostRequest $request, Post $post) {
   

    // $post = Post::find($post);    Esta línea no es necesaria porque lo definimos el tipo de varible que recibimos con Post
    // $post->title = $request->input('title');
    // $post->body = $request->input('body');
    // $post->save();

      // Como ya tenemos una variable $post que es una instancia del modelo Post podemos llamar a update:
    $post->update($request->validated()); 
    // session()->flash('status', 'Post updated!');   ES LO MISMO QUE ABAJO
    return redirect()->route('posts.show', $post)->with('status', 'Post updated!');
 }

 public function destroy(Post $post) {
   
  $post->delete();
  return to_route('posts.index')->with('status', 'Post deleted');
 }


 }


//  Esto iba don dice DB:

//  [
//          ['title' => 'First post'],
//          ['title' => 'Second post'],
//          ['title' => 'Third post']
//  ]; 
 
?>

