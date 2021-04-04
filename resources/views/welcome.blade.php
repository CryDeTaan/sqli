<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="w-1/3">
                <div class="py-3">
                    <div>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <div class="relative flex items-stretch flex-grow focus-within:z-10">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/users -->
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                                <input aria-label="Search" type="text" name="search" id="search" class="py-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-none rounded-l-md pl-10 sm:text-sm border-gray-300" placeholder="Search...">
                            </div>
                            <button class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                                <span>Search</span>
                            </button>
                        </div>
                    </div>

                </div>


                <ul class="space-y-3">

                    @foreach ($items as $item)
                        <li class="bg-white shadow overflow-hidden px-4 py-4 sm:px-6 sm:rounded-md">
                            <div class="block bg-white h-16 w-full text-gray-700">
                                {{ $item->name }}
                            </div>
                        </li>
                    @endforeach
                    {{ $items->onEachSide(3)->links() }}

                </ul>
            </div>
        </div>
    </body>
</html>
