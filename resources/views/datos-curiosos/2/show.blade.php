<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-indigo-50 to-sky-100 dark:from-gray-900 dark:to-gray-800 py-10 px-4 flex flex-col items-center">
    <div class="w-full max-w-2xl">
        <article class="bg-white dark:bg-gray-900/70 rounded-2xl shadow-2xl px-8 py-10 flex flex-col items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/6946/6946003.png"
                alt="Cifrado César"
                class="w-28 h-28 mb-6 drop-shadow-xl">
            <h1 class="text-3xl md:text-5xl font-extrabold text-indigo-700 dark:text-indigo-300 mb-4 text-center">
                El Cifrado César
            </h1>
            <p class="text-lg text-gray-700 dark:text-gray-200 mb-7 text-center">
                El cifrado César es uno de los métodos de cifrado más antiguos y simples. Consiste en desplazar cada letra del alfabeto un número fijo de posiciones. Julio César lo utilizaba para enviar mensajes secretos a sus generales. Aunque fácil de romper hoy en día, fue muy efectivo en su época.
            </p>
            <div class="bg-indigo-50 dark:bg-indigo-900/40 border-l-4 border-indigo-500 dark:border-indigo-300 px-6 py-4 rounded-xl mb-8">
                <h2 class="font-semibold text-indigo-700 dark:text-indigo-200 mb-2">Dato curioso:</h2>
                <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 text-base">
                    <li>Un cifrado César con desplazamiento de 13 (ROT13) aún se usa como broma en algunos foros de internet.</li>
                    <li>Hay solo 25 posibles claves, por lo que hoy cualquier computadora puede romperlo en milisegundos.</li>
                </ul>
            </div>
            <blockquote class="italic text-indigo-800 dark:text-indigo-200 mb-8 text-center">
                “A veces lo simple es efectivo... al menos por un tiempo.”
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
</x-app-layout>