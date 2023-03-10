<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Greens') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

         <!-- Styles -->
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">
         
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon"  href="{{ asset('images/Greens.ico') }}">

         <!-- Scripts -->
         <script src="{{ asset('js/app.js') }}" defer></script>
         <script src="{{ asset('js/swiper.js') }}" defer></script>

         <!-- toast -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
         
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- @if(auth('admin')->user())
                @include('layouts.admin-navigation')
            @elseif(auth('owners')->user())
                @include('layouts.owner-navigation')
            @elseif(auth('users')->user())
                @include('layouts.user-navigation')
            @endif --}}

          @if(request()->is('admin*'))
              @include('layouts.admin-navigation')
          @elseif(request()->is('owner*'))
              @include('layouts.owner-navigation')
          @else
              @include('layouts.user-navigation')
          @endif


            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
