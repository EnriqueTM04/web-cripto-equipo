<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-indigo-50 to-sky-100 dark:from-gray-900 dark:to-gray-800 py-10 px-4 flex flex-col items-center xl:pt-20">
        <div class="w-full max-w-3xl">
            <header class="mb-8 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-indigo-700 to-sky-500 bg-clip-text text-transparent mb-2">
                    Datos Curiosos de Criptografía
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    Explora los temas más sorprendentes del mundo de los códigos y el cifrado. Haz clic en cada título para descubrir el dato completo.
                </p>
            </header>
            
            <section class="grid gap-6 md:grid-cols-2">
                <!-- Reemplaza estos <a> con tus rutas reales -->
                <a href="{{route('datos-curiosos.show', $datosCuriosos[0]->id)}}" class="group block bg-white dark:bg-gray-900/70 rounded-2xl shadow-lg px-6 py-7 border border-indigo-100 dark:border-gray-700 hover:scale-[1.03] hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/3004/3004415.png" class="w-12 h-12 drop-shadow" alt="">
                        <div>
                            <h2 class="text-lg md:text-xl font-semibold text-indigo-700 dark:text-indigo-300 group-hover:underline">La máquina Enigma</h2>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Descubre cómo se rompió el código nazi más temido.</span>
                        </div>
                    </div>
                </a>
                <a href="{{route('datos-curiosos.show', $datosCuriosos[1]->id)}}" class="group block bg-white dark:bg-gray-900/70 rounded-2xl shadow-lg px-6 py-7 border border-indigo-100 dark:border-gray-700 hover:scale-[1.03] hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/6946/6946003.png" class="w-12 h-12 drop-shadow" alt="">
                        <div>
                            <h2 class="text-lg md:text-xl font-semibold text-indigo-700 dark:text-indigo-300 group-hover:underline">El Cifrado César</h2>
                            <span class="text-sm text-gray-500 dark:text-gray-400">El truco secreto de Julio César para enviar mensajes.</span>
                        </div>
                    </div>
                </a>
                <a href="{{route('datos-curiosos.show', $datosCuriosos[2]->id)}}" class="group block bg-white dark:bg-gray-900/70 rounded-2xl shadow-lg px-6 py-7 border border-indigo-100 dark:border-gray-700 hover:scale-[1.03] hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/5205/5205711.png" class="w-12 h-12 drop-shadow" alt="">
                        <div>
                            <h2 class="text-lg md:text-xl font-semibold text-indigo-700 dark:text-indigo-300 group-hover:underline">AES y el cifrado moderno</h2>
                            <span class="text-sm text-gray-500 dark:text-gray-400">El algoritmo que protege tus chats y tu banco.</span>
                        </div>
                    </div>
                </a>
                <a href="{{route('datos-curiosos.show', $datosCuriosos[3]->id)}}" class="group block bg-white dark:bg-gray-900/70 rounded-2xl shadow-lg px-6 py-7 border border-indigo-100 dark:border-gray-700 hover:scale-[1.03] hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/3781/3781509.png" class="w-12 h-12 drop-shadow" alt="">
                        <div>
                            <h2 class="text-lg md:text-xl font-semibold text-indigo-700 dark:text-indigo-300 group-hover:underline">El mito del descifrado de AES-256</h2>
                            <span class="text-sm text-gray-500 dark:text-gray-400">¿Es posible romperlo? ¡Mira lo que dice la ciencia!</span>
                        </div>
                    </div>
                </a>
            </section>
            
            <footer class="mt-14 text-xs text-gray-400 dark:text-gray-500 text-center">
                © 2025 Criptografía Curiosa. Todos los derechos reservados.
            </footer>
        </div>
    </div>
</x-app-layout>