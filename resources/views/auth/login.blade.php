<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Log in | {{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[#f3f5f1] font-sans text-[#17211b] antialiased">
        <main class="grid min-h-screen lg:grid-cols-[minmax(0,1fr)_minmax(440px,0.72fr)]">
            <section class="relative hidden overflow-hidden bg-[#173c2c] p-12 text-white lg:flex lg:flex-col lg:justify-between xl:p-16">
                <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,.75) 1px, transparent 0); background-size: 28px 28px;"></div>
                <div class="absolute -bottom-24 -right-20 h-96 w-96 rounded-full border-[64px] border-[#e6b85c]/80"></div>

                <a href="{{ url('/') }}" class="relative flex w-fit items-center gap-3 font-semibold tracking-wide">
                    <span class="grid size-10 place-items-center bg-[#e6b85c] text-lg font-bold text-[#173c2c]">{{ strtoupper(substr(config('app.name', 'L'), 0, 1)) }}</span>
                    {{ config('app.name', 'Laravel') }}
                </a>

                <div class="relative max-w-xl pb-12">
                    <p class="mb-5 text-sm font-semibold uppercase tracking-[0.18em] text-[#e6b85c]">Welcome back</p>
                    <h1 class="text-5xl font-semibold leading-[1.08] xl:text-6xl">Pick up where you left off.</h1>
                    <p class="mt-6 max-w-md text-lg leading-8 text-white/70">Sign in to access your workspace and keep everything moving.</p>
                </div>
            </section>

            <section class="flex min-h-screen items-center justify-center px-6 py-12 sm:px-10 lg:px-14">
                <div class="w-full max-w-md">
                    <a href="{{ url('/') }}" class="mb-12 flex w-fit items-center gap-3 font-semibold text-[#173c2c] lg:hidden">
                        <span class="grid size-10 place-items-center bg-[#e6b85c] text-lg font-bold">{{ strtoupper(substr(config('app.name', 'L'), 0, 1)) }}</span>
                        {{ config('app.name', 'Laravel') }}
                    </a>

                    <div class="mb-9">
                        <p class="mb-2 text-sm font-semibold uppercase tracking-[0.14em] text-[#52705f]">Account access</p>
                        <h2 class="text-3xl font-semibold text-[#17211b] sm:text-4xl">Log in</h2>
                        <p class="mt-3 text-[#637068]">Enter your email and password to continue.</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf

                        <div>
                            <label for="email" class="mb-2 block text-sm font-semibold">Email address</label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                autocomplete="email"
                                required
                                autofocus
                                class="block h-12 w-full border bg-white px-4 text-base outline-none transition focus:border-[#246b4a] focus:ring-4 focus:ring-[#246b4a]/10 @error('email') border-[#b42318] @else border-[#c9d0ca] @enderror"
                            >
                            @error('email')
                                <p class="mt-2 text-sm text-[#b42318]" role="alert">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="mb-2 block text-sm font-semibold">Password</label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                autocomplete="current-password"
                                required
                                class="block h-12 w-full border bg-white px-4 text-base outline-none transition focus:border-[#246b4a] focus:ring-4 focus:ring-[#246b4a]/10 @error('password') border-[#b42318] @else border-[#c9d0ca] @enderror"
                            >
                            @error('password')
                                <p class="mt-2 text-sm text-[#b42318]" role="alert">{{ $message }}</p>
                            @enderror
                        </div>

                        <label class="flex w-fit cursor-pointer items-center gap-3 text-sm text-[#46534b]">
                            <input name="remember" type="checkbox" class="size-4 border-[#aab5ad] text-[#246b4a] focus:ring-[#246b4a]">
                            Keep me signed in
                        </label>

                        <button type="submit" class="flex h-12 w-full items-center justify-center bg-[#246b4a] px-5 font-semibold text-white transition hover:bg-[#19583b] focus:outline-none focus:ring-4 focus:ring-[#246b4a]/25">
                            Log in
                        </button>
                    </form>

                    <p class="mt-10 border-t border-[#d9ded9] pt-6 text-center text-sm text-[#637068]">
                        Secure access protected by encrypted sessions.
                    </p>
                </div>
            </section>
        </main>
    </body>
</html>