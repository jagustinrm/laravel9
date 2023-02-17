<x-layouts.app title="Crear nuevo post" meta-description="Formulario para crear nuevo blog post">
    <h1>Create new post </h1>

    <form method="POST" action="{{route('posts.store')}}"> 
        @csrf
        @include('posts.form-fields')
        <button type="submit">Enviar</button>
        <br>
    </form>

    <a href="{{route('posts.index')}}">Regresar</a>
    </x-layouts.app>