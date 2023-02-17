<x-layouts.app :title="$post->title" :meta-description="$post->body">
    <h1>Edit form </h1>
    <form action="{{route('posts.update', $post)}}" method="POST" > 
 {{-- No se puede poner patch como método directamente, ya que los browser solo soportan GET y POST. Con @method lo que hace es agregarse un campo oculto de Laravel para redireccionar a la ruta correcta --}}
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <button type="submit">Enviar</button>
        <br>
    </form>
    <a href="{{route('posts.index')}}">Regresar</a>
    </x-layouts.app>