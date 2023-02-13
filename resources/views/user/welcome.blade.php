<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Greens') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
         
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon"  href="{{ asset('images/Greens.ico') }}">

         <!-- Scripts -->
         <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
   
    <body class="antialiased">

        <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
              {{-- <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg> --}}
              <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><img src="{{ asset("images/Gr.png") }}" class="ill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54"></a>
              <span class="font-semibold text-xl tracking-tight">Greens</span>
            </div>
            <div class="block lg:hidden">
              </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
              <div class="text-sm lg:flex-grow">
               
              </div>
              <div>
                @if (Route::has('user.login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth('users')
                        <a href="{{ url('/user') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('user.login') }}" class="inline-block text-sm md:px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Log in</a>

                        @if (Route::has('user.register'))
                            <a href="{{ route('user.register') }}" class="inline-block text-sm md:px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
          </nav>
                    <!-- Swiper -->
            <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('images/sample1.jpg') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('images/sample2.jpg') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('images/sample3.jpg') }}"></div>
            </div>
            </div>
                    <!-- button -->
           {{-- <div class="swiper-button-next"></div> --}}
           {{-- <div class="swiper-button-prev"></div> --}}
           {{-- <div class="swiper-pagination"></div> --}}

          
       
        <script src="{{ mix('js/swiper.js') }}"></script>
    </body>
</html>
