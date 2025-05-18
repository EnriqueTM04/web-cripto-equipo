<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CriptTeam</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Iniciar sesión
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Registrarse
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <!-- Pantalla de bienvenida -->
        <main class="flex-1 w-full flex flex-col justify-center items-center">
            <section class="w-full max-w-2xl bg-white dark:bg-[#1b1b18]/80 rounded-2xl shadow-lg px-8 py-10 flex flex-col items-center text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/3004/3004415.png"
                     alt="Criptografía Icon"
                     class="w-24 h-24 mb-6 drop-shadow" loading="lazy">
                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-indigo-700 dark:text-indigo-400">Bienvenido a <span class="inline-block text-transparent bg-clip-text bg-gradient-to-r from-indigo-700 to-sky-500 dark:from-indigo-400 dark:to-sky-300">CriptTeam</span></h1>
                <p class="text-base md:text-lg text-gray-700 dark:text-gray-200 mb-6">
                    Explora el fascinante mundo de los secretos, códigos y enigmas. Aquí podrás aprender y asombrarte con el arte de ocultar y revelar información, desde la antigüedad hasta la era digital.
                </p>
                <a href="#"
                   class="mt-3 px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold text-lg shadow-md transition">
                    Ver datos curiosos
                </a>
            </section>
        </main>

        <footer class="mt-12 mb-2 text-gray-400 text-xs text-center">
            © 2025 CriptTeam. Todos los derechos reservados.
        </footer>
    </body>
</html>
