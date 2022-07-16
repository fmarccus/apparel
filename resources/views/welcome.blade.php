<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rye Apparel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Italianno&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">

</head>

<body>
    <section class="relative" style="margin-left: -3.3rem;">

        <div class="hidden sm:block sm:inset-0 sm:absolute"></div>

        <div class="relative max-w-screen-xl px-4 py-32 mx-auto lg:h-screen lg:items-center lg:flex">
            <div class="max-w-xl text-center sm:text-left">

                <h1 class="p-2  text-6xl sm:text-8xl bg-gradient-to-tl from-amber-300 to-amber-800 bg-clip-text text-transparent" style="font-family: 'DM Serif Display', serif; letter-spacing: 10px; font-size:10rem;">RYE</h1>

                <h1 class="p-2  text-6xl sm:text-8xl bg-gradient-to-tl from-amber-200 to-amber-700 bg-clip-text text-transparent" style="font-family: 'Allura', cursive; margin-top:-2.3rem; margin-left:-2rem; letter-spacing:1px;">Apparels</h1>


                <p class="p-2 mt-16 font-bold bg-gradient-to-tl from-zinc-600 to-amber-800 bg-clip-text text-transparent max-w-lg sm:leading-relaxed sm:text-2xl" style="font-family: 'DM Serif Display', serif; letter-spacing: 10px; font-size:2rem;">
                    Fashion as unique as you are.
                </p>

                <div class="p-2 flex flex-wrap gap-4 mt-8 text-center">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/dashboard') }}" class="block w-full px-12 py-3 text-sm font-medium text-white rounded shadow bg-rose-600 sm:w-auto active:bg-rose-500 hover:bg-rose-700 focus:outline-none focus:ring" href="/get-started">
                        Dashboard
                    </a>
                    @else

                    <a href="{{ route('login') }}" class="block w-full font-bold px-12 py-3 text-sm text-white rounded shadow bg-amber-700 sm:w-auto active:bg-amber-900" href="/get-started">
                        LOGIN
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="block w-full font-bold px-12 py-3 text-sm  bg-orange-200 rounded shadow text-black sm:w-auto active:bg-rose-100" href="/about">
                    REGISTER
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
        background-image: url('../images/l-page.png');
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        object-fit: cover;

    }
</style>