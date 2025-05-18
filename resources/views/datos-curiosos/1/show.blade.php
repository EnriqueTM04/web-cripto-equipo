<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-indigo-50 to-sky-100 dark:from-gray-900 dark:to-gray-800 py-10 px-4 flex flex-col items-center">
    <div class="w-full max-w-2xl">
        <article class="bg-white dark:bg-gray-900/70 rounded-2xl shadow-2xl px-8 py-10 flex flex-col items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3004/3004415.png"
                alt="La máquina Enigma"
                class="w-28 h-28 mb-6 drop-shadow-xl">
            <h1 class="text-3xl md:text-5xl font-extrabold text-indigo-700 dark:text-indigo-300 mb-4 text-center">
                La máquina Enigma
            </h1>
            <p class="text-lg text-gray-700 dark:text-gray-200 mb-7 text-center">
                La máquina Enigma fue un dispositivo electromecánico usado por la Alemania nazi para cifrar mensajes durante la Segunda Guerra Mundial. Sus complejos rotores y conexiones internas la convirtieron en uno de los sistemas de cifrado más sofisticados de su época, y se creyó imposible de descifrar durante años.
            </p>
            <div class="bg-indigo-50 dark:bg-indigo-900/40 border-l-4 border-indigo-500 dark:border-indigo-300 px-6 py-4 rounded-xl mb-8">
                <h2 class="font-semibold text-indigo-700 dark:text-indigo-200 mb-2">Dato destacado:</h2>
                <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 text-base">
                    <li>Alan Turing, uno de los padres de la computación, lideró el equipo que logró descifrar Enigma.</li>
                    <li>El descifrado de Enigma acortó la guerra por lo menos dos años, según los historiadores.</li>
                    <li>Cada día, la configuración de Enigma cambiaba, generando más de 150,000,000,000,000,000 combinaciones posibles.</li>
                </ul>
            </div>
            <blockquote class="italic text-indigo-800 dark:text-indigo-200 mb-8 text-center">
                “Romper Enigma fue uno de los mayores logros criptográficos de la historia.”
            </blockquote>
            <div class="w-full flex justify-center">
                @include('datos-curiosos.templates.boton-pdf')
            </div>
        </article>
        <footer class="mt-12 text-xs text-gray-400 dark:text-gray-500 text-center">
            © 2025 Criptografía Curiosa. Todos los derechos reservados.
        </footer>
    </div>
</x-app-layout>