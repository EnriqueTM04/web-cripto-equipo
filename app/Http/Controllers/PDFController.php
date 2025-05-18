<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;

class PDFController extends Controller
{

    public function downloadPdf($id)
    {
        $fact = Dato::findOrFail($id);
        // $descripcion = $desc;

        // Usa una vista para el PDF (por ejemplo, resources/views/crypto_facts/pdf.blade.php)
        $pdf = \PDF::loadView('datos-curiosos.pdf', compact('fact'));

        $filename = 'Dato_Criptografia_' . $fact->id . '.pdf';
        return $pdf->download($filename);
    }
}
