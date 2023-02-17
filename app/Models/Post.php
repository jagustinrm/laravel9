<?php
//  php artisan make:model Post  Modelo de Eloquent, el ORM  de Laravel 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Automáticamente busca la tabla 'posts' en plural. Si quisiera cambiarlo es ->  protected $table = 'articles'
class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'body'];    Si lo ponemos así solo los campos del array pueden pasar
      //de esta manera pasan todos, pero hay que controlarlo antes. Nunca pasarlos con el método all()
    // protected $guarded = []; 
}

// IMPORTANTE: Con php artisan make:model Post -m  
// crea el modelo y la migración
