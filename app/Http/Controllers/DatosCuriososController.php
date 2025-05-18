<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;

class DatosCuriososController extends Controller
{
    
    public function index()
    {
        $datosCuriosos = Dato::all();
        return view('datos-curiosos.index', [
            'datosCuriosos' => $datosCuriosos,
        ]);
    }

    public function show($id)
    {
        return view('datos-curiosos.' . $id . '.show', [
            'dato' => Dato::findOrFail($id),
        ]);
    }
}
