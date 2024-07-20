<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Do It App</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        
    </head>
    <body class="antialiased primary-bg h-full">
        <div class="grid grid-rows-12">
            {{-- div for navigation bar --}}
            <div class="row-span-1">
                @include("components.navbar")
            </div>

            {{-- div for sidebar and content --}}
            <div class="row-span-11 grid grid-cols-12 h-full">
                <div class="col-span-2  w-full">
                    @include("components.sidebar")
                </div>
                <div class="col-span-10 ">
                    @yield("content")
              
                </div>
            </div>
                        

        </div>
    </body>

