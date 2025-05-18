<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required', 'same:password'],
        ]);

        // verificar si la contraseña actual es correcta en la base de datos
        if ($validated['current_password'] !== $request->user()->password) {
            dd($validated['current_password'], $request->user()->password);
            return back()->withErrors([
                'current_password' => 'La contraseña actual es incorrecta.',
            ]);
        }

        // actualizar la contraseña
        $request->user()->update([
            'password' => $validated['password'],
        ]);

        return back()->with('status', 'password-updated');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required', 'same:password'],
        ]);

        // verificar si la contraseña actual es correcta en la base de datos
        if ($validated['current_password'] !== $request->user()->password) {
            dd($validated['current_password'], $request->user()->password);
            return back()->withErrors([
                'current_password' => 'La contraseña actual es incorrecta.',
            ]);
        }

        // actualizar la contraseña
        $request->user()->update([
            'password' => $validated['password'],
        ]);

        return back()->with('status', 'password-updated');
    }
}
