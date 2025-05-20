<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class
            ],
            'password' => [
                'required',
                'min:8', // controla la longitud mínima
                // No permite caracteres consecutivos repetidos, y requiere mayus, minus, número y símbolo:
                'regex:/^(?!.*(.)\1)(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+$/'
            ],
            'password_confirmation' => ['required', 'same:password'],
        ], [
            'password.regex' => 'La contraseña debe tener al menos una mayúscula, una minúscula, un número, un símbolo y no puede tener caracteres repetidos consecutivos.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $user->password = $request->password;
        // guardar el usuario en la base de datos
        $user->save();

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
