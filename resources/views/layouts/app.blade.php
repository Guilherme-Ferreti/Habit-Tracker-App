<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="bg-gray-50 text-gray-900 antialiased h-screen flex flex-col">
        <div class="w-full max-w-md mx-auto bg-white h-full flex flex-col shadow-2xl relative overflow-hidden">
            <livewire:header />

            <main class="flex-1 overflow-y-auto p-5 pb-24 bg-gray-50">
                {{ $slot }}
            </main>

            <livewire:dock />
        </div>

        @livewireScripts
    </body>
</html>
