<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle an incoming authentication request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {  
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // buscar contraseña encriptada en la base de datos
        $user = \App\Models\User::where('email', $request->email)->first();
        
        // comparar la contraseña ingresada con la contraseña encriptada en la base de datos
        if ($request->password === $user->password) {
            auth()->login($user);
            $request->session()->regenerate();
            
            return redirect(route('dashboard', absolute: false));
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }
}
