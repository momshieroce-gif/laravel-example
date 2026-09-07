<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard | {{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[#f3f5f1] font-sans text-[#17211b] antialiased">
        <header class="border-b border-[#d9ded9] bg-white">
            <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 font-semibold">
                    <span class="grid size-9 place-items-center bg-[#e6b85c] font-bold text-[#173c2c]">{{ strtoupper(substr(config('app.name', 'L'), 0, 1)) }}</span>
                    {{ config('app.name', 'Laravel') }}
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="border border-[#bdc7c0] px-4 py-2 text-sm font-semibold transition hover:border-[#246b4a] hover:text-[#246b4a]">Log out</button>
                </form>
            </div>
        </header>

        <main class="mx-auto max-w-6xl px-6 py-16 sm:py-24">
            <p class="mb-3 text-sm font-semibold uppercase tracking-[0.14em] text-[#52705f]">Dashboard</p>
            <h1 class="max-w-3xl text-4xl font-semibold leading-tight sm:text-5xl">Welcome back, {{ auth()->user()->name }}.</h1>
            <p class="mt-5 max-w-xl text-lg leading-8 text-[#637068]">You are securely logged in to your account.</p>
        </main>
    </body>
</html>