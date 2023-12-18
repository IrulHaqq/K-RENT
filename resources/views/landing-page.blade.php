<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Welcome to K-RENT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <div class="max-h-screen bg-white" style="background-image: url(https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
    <div class="hero-overlay absolute inset-0 bg-white" style="background-color: rgba(255, 255, 255, 0.9);"></div>
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <img class="h-8 w-auto" src="{{ asset('images/icon.png') }}" alt="">
                    </a>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">About</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">System</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Pricing</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
        </header>

        <div class="relative px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:py-36 flex lg:flex-row-reverse items-start">
                <img src="{{ asset('images/car-key.png') }}" alt="" width="220px" class="ml-12">
                <div class="text-start">
                    <h1 class="text-4xl font-bold tracking-tight text-indigo-950 sm:text-5xl">Connecting <br> around us.
                        <br> <span class="text-indigo-400">with KRENT</span></h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Search, choose, and enjoy your journey.<br>
                        Rent your needed vehicle now,<br>
                        and create unforgettable travel moments with us.</p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                            started</a>
                        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
