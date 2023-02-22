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
   
    <body class="h-14 bg-gradient-to-r from-green-500 to-blue-500 antialiased">

        <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
              {{-- <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg> --}}
              <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><img src="{{ asset("images/logo-preview.png") }}" class="ill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54"></a>
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
                <div class="md:flex justify-end md:space-x-4">
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
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="swiper mySwiper">
             <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="{{ asset('images/main_header.png') }}">
               </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/sample1.jpg') }}">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/sample2.jpg') }}">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/sample3.jpg') }}">
                </div>
             </div>
            </div>
        </div>
                    <!-- button -->
           {{-- <div class="swiper-button-next"></div> --}}
           {{-- <div class="swiper-button-prev"></div> --}}
           {{-- <div class="swiper-pagination"></div> --}}

           <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Greensについて</font>
                  </font>
                </h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Greensはご家庭で余ったお野菜やフルーツを手軽に販売できるショッピングサイトです。</font>
                    {{-- <font style="vertical-align: inherit;">オーナー様は下記からどうぞ</font><br>
                    <a href="http://127.0.0.1:8000/owner/login"><button class="bg-gradient-to-b from-blue-300 to-blue-800 hover:bg-gradient-to-l text-white rounded px-4 py-2">オーナー用</button></a>
                  </font> --}}
                </p>
              </div>
          </section>
        <script src="{{ mix('js/swiper.js') }}"></script>
            <footer class="text-gray-600 body-font">
             <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
               <p class="text-sm text-gray-700 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">
                 <font style="vertical-align: inherit;">
                   <font style="vertical-align: inherit;">© 2023 Greens</font>
                 </font>
               </p>
               <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                 <a class="text-gray-500">
                     <a href="https://github.com/yuya21011111/laravel_shop"><img src="{{asset('images/github.ico') }}" class="w-5 h-5"></a>
                 </a>
                 <a class="ml-3 text-gray-500">
                   <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                     <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                   </svg>
                 </a>
                 <a class="ml-3 text-gray-500">
                   <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                     <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                     <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                   </svg>
                 </a>
               </span>
             </div>
           </footer>
    </body>
</html>
