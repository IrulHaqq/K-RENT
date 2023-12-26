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
    <div class="min-h-screen bg-white">
        <!-- NAVBAR HEADER -->
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <img class="h-8 w-auto" src="{{ asset('images/icon.png') }}" alt="">
                    </a>
                </div>
                <div class="hidden lg:flex lg:gap-x-12 ">
                    <a href="#" class="text-sm font-semibold leading-6 text-indigo-700"
                        onclick="scrollToSection('about-section')">About</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-indigo-700"
                        onclick="scrollToSection('system-section')">Benefit</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-indigo-700"
                        onclick="scrollToSection('stats-section')">Stats</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-indigo-700"
                        onclick="scrollToSection('reviews-section')">Reviews</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-indigo-700"
                        onclick="scrollToSection('teams-section')">Teams</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="{{ route('register') }}" class="text-sm font-semibold leading-6 text-gray-900">Register <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
        </header>
        <!-- WELCOME PAGE -->
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
                        <a href="{{ route('login') }}"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Rent now</a>
                        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT -->
        <section>
            <div id="about-section" class="h-full py-24 px-8 mx-auto md:px-12 lg:px-32 max-w-7xl">
                <div class="text-center">
                    <h3 class="py-16 text-2xl font-semibold tracking-tighter text-indigo-950">"it's all about customers
                        connecting with customers"</h3>
                    <p class="max-w-lg mx-auto text-base text-zinc-500">
                        Welcome to our revolutionary platform where the power of rental lies in the hands of the
                        community!. At KRENT,
                        we believe in the magic of shared experiences and the freedom to explore without boundaries. Say
                        goodbye to traditional rental hassles – here.
                    </p>
                </div>
            </div>
        </section>
        <!-- SYSTEM -->
        <section>
            <div id="system-section" class="h-full py-8 px-8 mx-auto md:px-12 lg:px-12 max-w-7xl">
                <div class="text-center">
                    <h3 class="py-4 text-2xl font-semibold tracking-tighter text-indigo-900">We also provide</h3>
                </div>
                <div class="grid grid-cols-2 text-center lg:grid-cols-4 lg:gap-x-12 lg:gap-y-4 py-6 lg:px-36">
                    <div>
                        <div>
                            <span
                                class="flex items-center justify-center w-12 h-12 mx-auto rounded-full bg-zinc-100"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                    class="w-6 h-6 text-zinc-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99">
                                    </path>
                                </svg></span>
                        </div>
                        <div class="mt-6">
                            <h3 class="font-medium text-zinc-900">Peer-to-Peer Power</h3>
                            <p class="mt-2 text-sm text-zinc-500">
                                Our platform connects you directly with fellow explorers, ensuring a seamless and
                                personalized transaction
                            </p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <span
                                class="flex items-center justify-center w-12 h-12 mx-auto rounded-full bg-zinc-100"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                    class="w-6 h-6 text-zinc-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                                    </path>
                                </svg></span>
                        </div>
                        <div class="mt-6">
                            <h3 class="font-medium text-zinc-900">Limitless Adventures</h3>
                            <p class="mt-2 text-sm text-zinc-500">
                                Dive into a vast array of offerings tailored to your specific needs
                            </p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <span
                                class="flex items-center justify-center w-12 h-12 mx-auto rounded-full bg-zinc-100"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                    class="w-6 h-6 text-zinc-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg></span>
                        </div>
                        <div class="mt-6">
                            <h3 class="font-medium text-zinc-900">Cost-Efficiency at Its Best</h3>
                            <p class="mt-2 text-sm text-zinc-500">
                                Save big on your adventures by renting from others in the community
                            </p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <span
                                class="flex items-center justify-center w-12 h-12 mx-auto rounded-full bg-zinc-100"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                    class="w-6 h-6 text-zinc-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z">
                                    </path>
                                </svg></span>
                        </div>
                        <div class="mt-6">
                            <h3 class="font-medium text-zinc-900">Trustworthy Community</h3>
                            <p class="mt-2 text-sm text-zinc-500">
                                Your safety and satisfaction are our top priorities
                            </p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <span
                                class="flex items-center justify-center w-12 h-12 mx-auto rounded-full bg-zinc-100"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                    class="w-6 h-6 text-zinc-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59">
                                    </path>
                                </svg></span>
                        </div>
                        <div class="mt-6">
                            <h3 class="font-medium text-zinc-900">Seamless Transactions</h3>
                            <p class="mt-2 text-sm text-zinc-500">
                                Enjoy a hassle-free rental experience with our intuitive platform
                            </p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <span
                                class="flex items-center justify-center w-12 h-12 mx-auto rounded-full bg-zinc-100"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                    class="w-6 h-6 text-zinc-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5">
                                    </path>
                                </svg></span>
                        </div>
                        <div class="mt-6">
                            <h3 class="font-medium text-zinc-900">Flexibility Redefined</h3>
                            <p class="mt-2 text-sm text-zinc-500">
                                Enjoy the flexibility of renting from individuals who understand the need for
                                adaptability
                            </p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <span
                                class="flex items-center justify-center w-12 h-12 mx-auto rounded-full bg-zinc-100"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                    class="w-6 h-6 text-zinc-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z">
                                    </path>
                                </svg></span>
                        </div>
                        <div class="mt-6">
                            <h3 class="font-medium text-zinc-900">Build Lasting Connections</h3>
                            <p class="mt-2 text-sm text-zinc-500">
                                Connect with like-minded individuals, share travel stories, and extend beyond your
                                rental period
                            </p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <span
                                class="flex items-center justify-center w-12 h-12 mx-auto rounded-full bg-zinc-100"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                    class="w-6 h-6 text-zinc-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3">
                                    </path>
                                </svg></span>
                        </div>
                        <div class="mt-6">
                            <h3 class="font-medium text-zinc-900">24/7 Support</h3>
                            <p class="mt-2 text-sm text-zinc-500">
                                Our dedicated support team is here around the clock to assist you
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- STATS -->
        <section>
            <div id="stats-section" class="h-full py-24 px-8 mx-auto md:px-12 lg:px-32 max-w-7xl">
                <div class="shadow-xl rounded-lg">

                    <div class="stat place-items-center">
                        <div class="stat-title text-indigo-300">Transactions</div>
                        <div class="stat-value">11K</div>
                        <div class="stat-desc">From 2023 to 2024</div>
                    </div>

                    <div class="stat place-items-center">
                        <div class="stat-title text-indigo-300">Users</div>
                        <div class="stat-value text-secondary">4,200</div>
                        <div class="stat-desc text-secondary">↗︎ 40 (2%)</div>
                    </div>

                    <div class="stat place-items-center">
                        <div class="stat-title text-indigo-300">New Registers</div>
                        <div class="stat-value">1,200</div>
                        <div class="stat-desc">↘︎ 90 (14%)</div>
                    </div>

                </div>
            </div>
        </section>
        <!-- REVIEWS -->
        <section id="reviews-section" class="bg-gray-100 sm:py-24 mx-auto md:px-4">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h3 class="text-center py-12 text-2xl font-semibold tracking-tighter text-indigo-950">What they said
                </h3>
                <ul role="list" class="grid max-w-2xl grid-cols-1 gap-6 mx-auto sm:gap-8 lg:max-w-none lg:grid-cols-3">
                    <li>
                        <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
                            <li>
                                <figure class="relative h-full p-6 bg-white rounded-3xl">
                                    <blockquote class="relative">
                                        <p class="text-base text-gray-500">
                                            Snowflake is a cloud data platform that enables data storage,
                                            processing, and analytics solutions for businesses.
                                        </p>
                                    </blockquote>
                                    <figcaption
                                        class="relative flex items-center justify-between pt-6 mt-6 border-t border-gray-100">
                                        <div>
                                            <div class="text-base text-black">
                                                Annur Flint
                                            </div>
                                            <div class="mt-1 text-sm text-gray-500">
                                                CEO at Flint LLC
                                            </div>
                                        </div>
                                        <div class="overflow-hidden rounded-full bg-gray-50">
                                            <img alt=""
                                                src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80"
                                                width="56" height="56" decoding="async" data-nimg="future"
                                                class="object-cover h-14 w-14" loading="lazy"
                                                style="color: transparent">
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
                            <li>
                                <figure class="relative h-full p-6 bg-white rounded-3xl">
                                    <blockquote class="relative">
                                        <p class="text-base text-gray-500">
                                            Upswing securities passively index inverse bondholders
                                            capitalization financial health Moody's debt managed.
                                        </p>
                                    </blockquote>
                                    <figcaption
                                        class="relative flex items-center justify-between pt-6 mt-6 border-t border-gray-100">
                                        <div>
                                            <div class="text-base text-black">
                                                Oliver Benji
                                            </div>
                                            <div class="mt-1 text-sm text-gray-500">
                                                Founder of Benji and Tom
                                            </div>
                                        </div>
                                        <div class="overflow-hidden rounded-full bg-gray-50">
                                            <img alt=""
                                                src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1999&amp;q=80"
                                                width="56" height="56" decoding="async" data-nimg="future"
                                                class="object-cover h-14 w-14" loading="lazy"
                                                style="color: transparent">
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
                            <li>
                                <figure class="relative h-full p-6 bg-white rounded-3xl">
                                    <blockquote class="relative">
                                        <p class="text-base text-gray-500">
                                            Debt bills lucrative capitalization municipal bonds government
                                            401k bear bull credit corporate bonds called NYSE finance.
                                        </p>
                                    </blockquote>
                                    <figcaption
                                        class="relative flex items-center justify-between pt-6 mt-6 border-t border-gray-100">
                                        <div>
                                            <div class="text-base text-black">
                                                Melon Tusk
                                            </div>
                                            <div class="mt-1 text-sm text-gray-500">
                                                Founder of Fesla
                                            </div>
                                        </div>
                                        <div class="overflow-hidden rounded-full bg-gray-50">
                                            <img alt=""
                                                src="https://images.unsplash.com/photo-1602434228300-a645bce6891b?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1639&amp;q=80"
                                                width="56" height="56" decoding="async" data-nimg="future"
                                                class="object-cover h-14 w-14" loading="lazy"
                                                style="color: transparent">
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
        <!-- TEAMS -->
        <section>

            <section>
                <div id=teams-section class="items-center w-full py-32 mx-auto md:px-12 lg:px-16 max-w-7xl">
                    <h3 class="text-center mb-32 text-2xl font-semibold tracking-tighter text-indigo-950">Our Teams</h3>
                    <ul role="list"
                        class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-5">
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-[3/2]">
                                    <img class="object-cover w-full h-full"
                                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80"
                                        alt="">
                                </div>
                                <div class="inline-flex items-start justify-between w-full">
                                    <div class="space-y-1">
                                        <h3 class="text-lg font-medium leading-6 text-black">
                                            Steven Harun Samba
                                        </h3>
                                        <p class="text-base text-gray-500">
                                            Project Manager
                                        </p>
                                    </div>
                                    <div>
                                        <ul role="list" class="flex space-x-5">
                                            <li>
                                                <a href="#" class="text-gray-400 hover:text-gray-500">
                                                    <ion-icon name="logo-dribbble" role="img" class="md hydrated"
                                                        aria-label="logo dribbble"></ion-icon>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-gray-400 hover:text-gray-500">
                                                    <span class="sr-only">
                                                        Twitter
                                                    </span>
                                                    <ion-icon name="logo-twitter" role="img" class="md hydrated"
                                                        aria-label="logo twitter"></ion-icon>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-[3/2]">
                                    <img class="object-cover w-full h-full"
                                        src="https://images.unsplash.com/photo-1602434228300-a645bce6891b?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1639&amp;q=80"
                                        alt="">
                                </div>
                                <div class="inline-flex items-start justify-between w-full">
                                    <div class="space-y-1">
                                        <h3 class="text-lg font-medium leading-6 text-black">
                                            Rafii Dandy Adhitya
                                        </h3>
                                        <p class="text-base text-gray-500">
                                            UI & UX Designer
                                        </p>
                                    </div>
                                    <div>
                                        <ul role="list" class="flex space-x-5">
                                            <li>
                                                <a href="#" class="text-gray-400 hover:text-gray-500">
                                                    <ion-icon name="logo-dribbble" role="img" class="md hydrated"
                                                        aria-label="logo dribbble"></ion-icon>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-gray-400 hover:text-gray-500">
                                                    <span class="sr-only">
                                                        Twitter
                                                    </span>
                                                    <ion-icon name="logo-twitter" role="img" class="md hydrated"
                                                        aria-label="logo twitter"></ion-icon>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-[3/2]">
                                    <img class="object-cover w-full h-full"
                                        src="https://images.unsplash.com/photo-1577202214328-c04b77cefb5d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2073&amp;q=80"
                                        alt="">
                                </div>
                                <div class="inline-flex items-start justify-between w-full">
                                    <div class="space-y-1">
                                        <h3 class="text-lg font-medium leading-6 text-black">
                                            Mohamad Fahrudin
                                        </h3>
                                        <p class="text-base text-gray-500">
                                            Frontend Developer
                                        </p>
                                    </div>
                                    <div>
                                        <ul role="list" class="flex space-x-5">
                                            <li>
                                                <a href="#" class="text-gray-400 hover:text-gray-500">
                                                    <ion-icon name="logo-dribbble" role="img" class="md hydrated"
                                                        aria-label="logo dribbble"></ion-icon>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-gray-400 hover:text-gray-500">
                                                    <span class="sr-only">
                                                        Twitter
                                                    </span>
                                                    <ion-icon name="logo-twitter" role="img" class="md hydrated"
                                                        aria-label="logo twitter"></ion-icon>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-[3/2]">
                                    <img class="object-cover w-full h-full"
                                        src="https://images.unsplash.com/photo-1577202214328-c04b77cefb5d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2073&amp;q=80"
                                        alt="">
                                </div>
                                <div class="inline-flex items-start justify-between w-full">
                                    <div class="space-y-1">
                                        <h3 class="text-lg font-medium leading-6 text-black">
                                            Yuwandi Ruli
                                        </h3>
                                        <p class="text-base text-gray-500">
                                            Frontend Developer
                                        </p>
                                    </div>
                                    <div>
                                        <ul role="list" class="flex space-x-5">
                                            <li>
                                                <a href="#" class="text-gray-400 hover:text-gray-500">
                                                    <ion-icon name="logo-dribbble" role="img" class="md hydrated"
                                                        aria-label="logo dribbble"></ion-icon>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-gray-400 hover:text-gray-500">
                                                    <span class="sr-only">
                                                        Twitter
                                                    </span>
                                                    <ion-icon name="logo-twitter" role="img" class="md hydrated"
                                                        aria-label="logo twitter"></ion-icon>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-[3/2]">
                                    <img class="object-cover w-full h-full"
                                        src="https://images.unsplash.com/photo-1577202214328-c04b77cefb5d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2073&amp;q=80"
                                        alt="">
                                </div>
                                <div class="inline-flex items-start justify-between w-full">
                                    <div class="space-y-1">
                                        <h3 class="text-lg font-medium leading-6 text-black">
                                            Abiyoga Dhaniswara
                                        </h3>
                                        <p class="text-base text-gray-500">
                                            Backend Developer
                                        </p>
                                    </div>
                                    <div>
                                        <ul role="list" class="flex space-x-5">
                                            <li>
                                                <a href="#" class="text-gray-400 hover:text-gray-500">
                                                    <ion-icon name="logo-dribbble" role="img" class="md hydrated"
                                                        aria-label="logo dribbble"></ion-icon>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-gray-400 hover:text-gray-500">
                                                    <span class="sr-only">
                                                        Twitter
                                                    </span>
                                                    <ion-icon name="logo-twitter" role="img" class="md hydrated"
                                                        aria-label="logo twitter"></ion-icon>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </section>
    </div>
</body>
<!-- Smooth Scroll to Navbar to Section -->
<script>
    function scrollToSection(sectionId) {
        var section = document.getElementById(sectionId);

        if (section) {
            section.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }
</script>

</html>
