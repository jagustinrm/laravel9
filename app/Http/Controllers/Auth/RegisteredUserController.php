<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class RegisteredUserController extends Controller
{
   public function store(Request $request) {
    $request -> validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        // NO GUARDAR LA CONTRASEÑA COMO VIENE 
        'password' => bcrypt($request->password),
    ]);
//autenticar automáticamente
     Auth::login($user );  
//redirigir a al login para que inicie sesión con lo datos
     return to_route('login')->with('status', 'cuenta creada');
   } 
}
