<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, viewport-fit=cover"
        />

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="flex h-screen flex-col bg-gray-50 text-gray-900 antialiased">
        <div
            id="app-container"
            class="relative mx-auto flex h-full w-full max-w-md flex-col overflow-hidden bg-white shadow-2xl"
        >
            <x-layout.header />

            <main class="flex-1 overflow-y-auto bg-gray-50 p-5 pb-24">{{ $slot }}</main>

            <x-layout.navigation />

            @stack('bottom-sheets')
            @stack('modals')
        </div>

        @livewireScripts
    </body>
</html>
