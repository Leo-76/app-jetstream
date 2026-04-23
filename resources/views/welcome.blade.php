<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel Jetstream') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="max-w-4xl w-full px-6 text-center">
            <div class="flex justify-center mb-8">
                <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-9 h-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09Z"/>
                    </svg>
                </div>
            </div>
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Laravel <span class="text-indigo-600">Jetstream</span></h1>
            <p class="text-xl text-gray-500 mb-10">Starter kit · Livewire · Tailwind CSS · Fortify Auth</p>
            <div class="flex flex-wrap justify-center gap-3 mb-12">
                @foreach(['Laravel 11', 'Jetstream 5', 'Livewire 3', 'Tailwind CSS 3', 'SQLite'] as $tech)
                    <span class="px-4 py-1.5 bg-white border border-gray-200 rounded-full text-sm font-medium text-gray-600 shadow-sm">{{ $tech }}</span>
                @endforeach
            </div>
            <div class="flex justify-center gap-4">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="px-6 py-3 bg-indigo-600 text-white rounded-lg font-semibold hover:bg-indigo-700 transition shadow-sm">Se connecter</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-6 py-3 bg-white border border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50 transition shadow-sm">Créer un compte</a>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
