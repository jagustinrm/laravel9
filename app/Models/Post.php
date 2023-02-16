<?php
//  php artisan make:model Post  Modelo de Eloquent, el ORM  de Laravel 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Automáticamente busca la tabla 'posts' en plural. Si quisiera cambiarlo es ->  protected $table = 'articles'
class Post extends Model
{
    use HasFactory;
}

// IMPORTANTE: Con php artisan make:model Post -m  
// crea el modelo y la migración
