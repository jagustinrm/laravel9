<x-layouts.app name="title" meta-description="Blog meta description">
    {{-- Con session hace una sola petición flash que dura una sola sesión --}}
    @if(session('status'))
    <div class="status">
    {{session('status')}}
    </div>
    @endif
    <h1>Blog</h1>
    <a href="{{route('posts.create')}}">Create new Post</a> 
    {{-- Traigo todos los posts del array  --}}
    @foreach($posts as $post)
    <h2> <a href="{{route('posts.show', $post)}}"> {{$post->title}}</a> </h2>
    @endforeach
</x-layouts.app>