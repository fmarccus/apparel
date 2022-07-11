<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rye Apparel</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <section class="relative">

        <div class="hidden sm:block sm:inset-0 sm:absolute"></div>

        <div class="relative max-w-screen-xl px-4 py-32 mx-auto lg:h-screen lg:items-center lg:flex">
            <div class="max-w-xl text-center sm:text-left">

                <h1 class="p-2 font-extrabold text-8xl sm:text-8xl bg-gradient-to-tl from-red-200 via-sky-400 to-indigo-700 bg-clip-text text-transparent">Rye</h1><br>
                <h1 class="p-2 font-extrabold text-6xl sm:text-8xl bg-gradient-to-tl from-red-200 via-sky-400 to-indigo-700 bg-clip-text text-transparent">Apparel</h1>


                <p class="p-2 mt-16 font-bold max-w-lg sm:leading-relaxed sm:text-2xl text-white">
                Fashion as unique as you are.
                </p>

                <div class="p-2 flex flex-wrap gap-4 mt-8 text-center">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/dashboard') }}" class="block w-full px-12 py-3 text-sm font-medium text-white rounded shadow bg-rose-600 sm:w-auto active:bg-rose-500 hover:bg-rose-700 focus:outline-none focus:ring" href="/get-started">
                        Dashboard
                    </a>
                    @else

                    <a href="{{ route('login') }}" class="block w-full px-12 py-3 text-sm font-medium text-white rounded shadow bg-gray-800 sm:w-auto active:bg-slate-700 hover:bg-cyan-800 focus:outline-none focus:ring" href="/get-started">
                        Login
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="block w-full px-12 py-3 text-sm font-medium bg-white rounded shadow text-black sm:w-auto hover:text-cyan-800 active:bg-slate-700 focus:outline-none focus:ring" href="/about">
                        Register
                    </a>
                    @endif
                    @endauth
                    @endif
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<style>
    html {
        background-image: url('../images/rye-logo.png');
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>