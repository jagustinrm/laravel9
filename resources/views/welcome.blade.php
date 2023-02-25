{{-- @component('component.layout') --}}

{{-- Los slots con nombre agregan estructura html. Todo lo que esté dentro de estas etiquetas llegará al layout como un slot, y los slots con nombre llegan como propiedades con ese nombre.
Utilizo layouts.app porque está dentro de layouts el archivo app. El "." es carpeta y la "x" es "components".    
    
--}}

<x-layouts.app name="title" meta-description="Home meta description">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>

</x-layout.app> 
{{-- @endcomponent --}}
