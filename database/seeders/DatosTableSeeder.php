<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('datos')->truncate(); // Limpia antes de insertar, solo si es seguro

        DB::table('datos')->insert([
            [
                'titulo' => 'La máquina Enigma',
                'descripcion' => 'La máquina Enigma fue un dispositivo electromecánico usado por la Alemania nazi para cifrar mensajes durante la Segunda Guerra Mundial. Sus complejos rotores y conexiones internas la convirtieron en uno de los sistemas de cifrado más sofisticados de su época, y se creyó imposible de descifrar durante años. Alan Turing y su equipo lograron romper el código, cambiando el curso de la guerra.'
            ],
            [
                'titulo' => 'El Cifrado César',
                'descripcion' => 'El cifrado César es uno de los métodos de cifrado más antiguos y simples. Consiste en desplazar cada letra del alfabeto un número fijo de posiciones. Julio César lo utilizaba para enviar mensajes secretos a sus generales. Aunque fácil de romper hoy en día, fue muy efectivo en su época.'
            ],
            [
                'titulo' => 'AES y el cifrado moderno',
                'descripcion' => 'El algoritmo AES (Advanced Encryption Standard) es la columna vertebral de la criptografía moderna. Adoptado en 2001, AES se utiliza en banca, WiFi y mensajería. Es robusto, flexible y aún no ha sido vulnerado por fuerza bruta.'
            ],
            [
                'titulo' => 'El mito del descifrado de AES-256',
                'descripcion' => 'AES-256 es considerado prácticamente indescifrable por fuerza bruta. El número de combinaciones es tan enorme que no hay computadoras capaces de probarlas todas en la vida del universo. Solo una implementación incorrecta o un error humano pondría en riesgo tu información cifrada con AES-256.'
            ]
        ]);
    }
}
