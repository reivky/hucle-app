<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    </style>
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="/build/assets/style.css">
    <title>{{ $title }}</title>
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="dark:bg-gray-900">
    <header class="shadow-md absolute top-0 w-full dark:shadow-none">
        <div class="w-full flex items-center justify-between px-10 py-5 bg-white dark:bg-gray-800">
            <div>
                <span class="font-bold text-2xl dark:text-white">Hucle App.</span>
            </div>
            <div class="dark:text-white flex items-center">
                <div class="inline-flex items-center justify-center gap-1 mr-10 relative">
                    {{-- <i class="fad fa-sun"></i> --}}
                    <label for="toggle-dark"
                        class="w-[50px] h-[20px] bg-gray-500 dark:bg-white rounded-full cursor-pointer p-[2px] box-content inline-flex transition-all duration-300 toggle-bg relative"
                        id="toggle-bg">
                        <i class="fad fa-sun text-black absolute left-[3px] top-1/2 -translate-y-[45%]"></i>
                        <i class="fas fa-moon-stars text-white absolute right-[3px] top-1/2 -translate-y-[50%]"></i>
                        <input type="checkbox" class="hidden peer" id="toggle-dark" />
                        <div
                            class="bg-white dark:bg-gray-900 w-[20px] h-[20px] rounded-full flex items-center toggle peer-checked:translate-x-[30px] z-10 transition-all duration-300">
                        </div>
                    </label>
                    {{-- <i class="fad fa-moon scale-95"></i> --}}
                    <div class="h-8 w-[0.10rem] rounded-full bg-gray-300 dark:bg-gray-900 absolute -right-5"></div>
                </div>
                <img src="/img/profile.jpg" class="inline-block rounded-full w-[30px] shadow-md mr-4" alt="Avatar" />
                <span class="mr-3">Rifqi Ainun Niam</span>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </header>
    <div class="grid grid-cols-12 mt-[75px]">
        @include('layouts.sidebar')
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="/build/assets/script.js"></script>
    <script>
        const darkToggle = document.querySelector('#toggle-dark');
        const html = document.querySelector('html');
        const inputTime = document.querySelector('input[type="number"]');

        darkToggle.addEventListener('click', function() {
            if (darkToggle.checked) {
                html.classList.add('dark');
                localStorage.theme = 'dark'
            } else {
                html.classList.remove('dark');
                localStorage.theme = 'light'
            }
        });

        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            darkToggle.checked = true;
            inputTime.style.colorScheme = 'dark';
        } else {
            darkToggle.checked = false;
        }
    </script>
</body>

</html>
