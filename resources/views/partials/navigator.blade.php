<nav>
<ul>  <!-- En blade doble llaves sirven para proteger el código, compilado luego en php -->
    <li><a href="{{ route('welcome') }}">Home</a></li>
    <!-- En blade, si agrego !! no agrega protección -->
    <li><a href="{{ route('blog') }}">Blog</a></li>
    <li><a href="<?= route('about')?>">About</a></li>
    <li><a href="<?= route('contact')?>">Contacto</a></li>
</ul>
</nav>