<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-indigo-50 to-sky-100 dark:from-gray-900 dark:to-gray-800 py-10 px-4 flex flex-col items-center">
    <div class="w-full max-w-2xl">
        <article class="bg-white dark:bg-gray-900/70 rounded-2xl shadow-2xl px-8 py-10 flex flex-col items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/5205/5205711.png"
                alt="AES y el cifrado moderno"
                class="w-28 h-28 mb-6 drop-shadow-xl">
            <h1 class="text-3xl md:text-5xl font-extrabold text-indigo-700 dark:text-indigo-300 mb-4 text-center">
                AES y el cifrado moderno
            </h1>
            <p class="text-lg text-gray-700 dark:text-gray-200 mb-7 text-center">
                El algoritmo AES (Advanced Encryption Standard) es la columna vertebral de la criptografía moderna. Adoptado en 2001 como el estándar para proteger información digital, AES se utiliza en aplicaciones tan diversas como banca en línea, archivos comprimidos, WiFi y mensajería instantánea. Su fortaleza radica en un diseño matemático sofisticado, resistente incluso ante los ataques más avanzados y el poder de las computadoras actuales.
            </p>
            <div class="bg-indigo-50 dark:bg-indigo-900/40 border-l-4 border-indigo-500 dark:border-indigo-300 px-6 py-4 rounded-xl mb-8">
                <h2 class="font-semibold text-indigo-700 dark:text-indigo-200 mb-2">Lo que hace especial a AES:</h2>
                <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 text-base">
                    <li>Utiliza bloques de datos de 128 bits y claves de 128, 192 o 256 bits, permitiendo seguridad flexible y robusta.</li>
                    <li>Su diseño fue evaluado públicamente durante años por criptógrafos de todo el mundo antes de ser elegido como estándar.</li>
                    <li>Hoy, hasta los teléfonos celulares y tarjetas bancarias usan AES para proteger tu información.</li>
                </ul>
            </div>
            <blockquote class="italic text-indigo-800 dark:text-indigo-200 mb-8 text-center">
                “AES es tan seguro que, si se implementa correctamente, ni siquiera las supercomputadoras más poderosas pueden romperlo en un tiempo razonable.”
            </blockquote>
            <div class="w-full flex justify-center">
                <div class="w-full flex justify-center">
                    @include('datos-curiosos.templates.boton-pdf')
                </div>
            </div>
        </article>
        <footer class="mt-12 text-xs text-gray-400 dark:text-gray-500 text-center">
            © 2025 Criptografía Curiosa. Todos los derechos reservados.
        </footer>
    </div>
</div>
</x-app-layout>
