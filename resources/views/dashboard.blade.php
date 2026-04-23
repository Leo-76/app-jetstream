<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Dashboard') }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Bienvenue, {{ Auth::user()->name }} !</h3>
                        <p class="text-gray-500 text-sm">Connecté via Laravel Jetstream + Livewire.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                    <div class="bg-indigo-50 rounded-lg p-5 border border-indigo-100">
                        <p class="text-sm font-medium text-indigo-600">Stack Frontend</p>
                        <p class="text-2xl font-bold text-indigo-900 mt-1">Livewire 3</p>
                    </div>
                    <div class="bg-emerald-50 rounded-lg p-5 border border-emerald-100">
                        <p class="text-sm font-medium text-emerald-600">CSS Framework</p>
                        <p class="text-2xl font-bold text-emerald-900 mt-1">Tailwind CSS</p>
                    </div>
                    <div class="bg-amber-50 rounded-lg p-5 border border-amber-100">
                        <p class="text-sm font-medium text-amber-600">Authentification</p>
                        <p class="text-2xl font-bold text-amber-900 mt-1">Fortify</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
