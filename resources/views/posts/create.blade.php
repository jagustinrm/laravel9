<x-layouts.app title="Crear nuevo post" meta-description="Formulario para crear nuevo blog post">
    <h1>Create new post </h1>

    <form method="POST" action="{{route('posts.store')}}"> 
        @csrf
        <label>
            Title <br>
            <input name="title" type="text" value="{{old('title')}}">
        </label> 
        @error('title')
        <br>
        <small style="color: red">{{$message}} </small>
        @enderror
        <br>
        <label>
            Body <br>
            <textarea name="body" >{{old('body')}}</textarea>
        @error('body')
        <small style="color: red">{{$message}} </small>
        @enderror
        </label> <br>
        <button type="submit">Enviar</button>
        <br>
    </form>

    <a href="{{route('posts.index')}}">Regresar</a>
    </x-layouts.app>