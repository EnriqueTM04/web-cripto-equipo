
<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-indigo-50 to-sky-100 dark:from-gray-900 dark:to-gray-800 py-10 px-4 flex flex-col items-center">
    <div class="w-full max-w-2xl">
        <article class="bg-white dark:bg-gray-900/70 rounded-2xl shadow-2xl px-8 py-10 flex flex-col items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3781/3781509.png"
                alt="El mito del descifrado de AES-256"
                class="w-28 h-28 mb-6 drop-shadow-xl">
            <h1 class="text-3xl md:text-5xl font-extrabold text-indigo-700 dark:text-indigo-300 mb-4 text-center">
                El mito del descifrado de AES-256
            </h1>
            <p class="text-lg text-gray-700 dark:text-gray-200 mb-7 text-center">
                El cifrado AES-256 es considerado por muchos expertos como prácticamente indescifrable por fuerza bruta. El número de combinaciones posibles para una clave de 256 bits es tan enorme que, incluso si todas las computadoras del mundo trabajaran juntas, les tomaría miles de millones de años revisar todas las opciones. A día de hoy, no existe registro de que alguien haya roto este cifrado usando la fuerza bruta, y los expertos confían en su seguridad, siempre y cuando se implemente correctamente.
            </p>
            <div class="bg-indigo-50 dark:bg-indigo-900/40 border-l-4 border-indigo-500 dark:border-indigo-300 px-6 py-4 rounded-xl mb-8">
                <h2 class="font-semibold text-indigo-700 dark:text-indigo-200 mb-2">¿Sabías qué…?</h2>
                <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 text-base">
                    <li>El número de claves posibles de AES-256 es 2<sup>256</sup>, un número tan grande que supera la cantidad de átomos en el universo observable.</li>
                    <li>La seguridad real depende más de la clave y el sistema que del algoritmo, así que nunca compartas tu contraseña con nadie.</li>
                    <li>Si algún día se crean computadoras cuánticas lo suficientemente potentes, podrían suponer una amenaza, pero todavía estamos lejos de ese escenario.</li>
                </ul>
            </div>
            <blockquote class="italic text-indigo-800 dark:text-indigo-200 mb-8 text-center">
                “Usar AES-256 bien implementado es, hoy por hoy, como tener una caja fuerte con una combinación imposible de adivinar.”
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