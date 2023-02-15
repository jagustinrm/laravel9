<x-layouts.app name="title" meta-description="Blog meta description">
    <h1>Blog</h1>
    {{-- Traigo todos los posts del array  --}}
    @foreach($posts as $post)
    <h2> {{$post->title}} </h2>
    @endforeach
</x-layouts.app>