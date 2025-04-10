<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Airline nya Valerie')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- Tailwind & Flowbite CDN --}}
        <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.4/dist/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-50 text-gray-900 flex flex-col min-h-screen">

        {{-- Header --}}
        @include('components.header')

        {{-- Main Content --}}
        <main class="flex-grow container mx-auto py-8 px-4 ">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('components.footer')

        {{-- Flowbite Script --}}
        <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.4/dist/flowbite.min.js"></script>
    </body>

</html>