<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class AuthenticatedSessionController extends Controller
{
    public function store (Request $request) {
        $credentials = $request ->validate([
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string'],
        ]);
        if (!Auth::attempt($credentials, $request->boolean('remember'))) {  // el segundo parámetro sirve para saber si activó o no el checkbox
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);

        }
        $request->session()->regenerate();
        // Nos redirecciona a la ruta anterior, a la que quiso acceder y por la que tuvo que logearse
        return redirect()->intended()->with('status', 'You are logged in');
        
    }
    public function destroy (Request $request) {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request ->session()->regenerateToken();
        return to_route('login')->with('status', 'cuenta cerrada');
    }

}
