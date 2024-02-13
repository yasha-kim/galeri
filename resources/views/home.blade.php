<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
    <div id="app">
        @include('layouts.navigation')

        <main class="py-4">
            <div class="columns-1 gap-4 space-y-4 p-4 sm:columns-2 md:columns-3 lg:columns-4">
                <div class="group relative cursor-pointer overflow-hidden rounded-md">
                    <img src="{{asset('images/image1.jpg')}}" />
                    <div class="absolute inset-0 opacity-0 transition duration-300 group-hover:opacity-100">
                    <div class="pointer-events-none absolute inset-0 bg-black opacity-30"></div>
                    <div class="absolute inset-0 flex flex-col p-8">
                        <button class="mr-auto rounded-full bg-red-500 py-2 px-8 text-sm font-bold text-white">Share</button>
                        <div class="relative z-10 mt-auto break-words text-lg font-semibold text-white">Woman in white dress shirt holding red flower during daytime.</div>
                    </div>
                    </div>
                </div>
                <div class="group relative cursor-pointer overflow-hidden rounded-md">
                    <img src="{{asset('images/image2.jpg')}}" />
                    <div class="absolute inset-0 opacity-0 transition duration-300 group-hover:opacity-100">
                    <div class="pointer-events-none absolute inset-0 bg-black opacity-30"></div>
                    <div class="absolute inset-0 flex flex-col p-8">
                        <button class="mr-auto rounded-full bg-red-500 py-2 px-8 text-sm font-bold text-white">Share</button>
                        <div class="relative z-10 mt-auto break-words text-lg font-semibold text-white">Woman wearing white blazer.</div>
                    </div>
                    </div>
                </div>
                <div class="group relative cursor-pointer overflow-hidden rounded-md">
                    <img src="{{asset('images/image3.jpg')}}" />
                    <div class="absolute inset-0 opacity-0 transition duration-300 group-hover:opacity-100">
                    <div class="pointer-events-none absolute inset-0 bg-black opacity-30"></div>
                    <div class="absolute inset-0 flex flex-col p-8">
                        <button class="mr-auto rounded-full bg-red-500 py-2 px-8 text-sm font-bold text-white">Share</button>
                        <div class="relative z-10 mt-auto break-words text-lg font-semibold text-white">Woman wearing black scoop-neck sleeveless top.</div>
                    </div>
                    </div>
                </div>
                <div class="group relative cursor-pointer overflow-hidden rounded-md">
                    <img src="{{asset('images/image4.jpg')}}" />
                    <div class="absolute inset-0 opacity-0 transition duration-300 group-hover:opacity-100">
                    <div class="pointer-events-none absolute inset-0 bg-black opacity-30"></div>
                    <div class="absolute inset-0 flex flex-col p-8">
                        <button class="mr-auto rounded-full bg-red-500 py-2 px-8 text-sm font-bold text-white">Share</button>
                        <div class="relative z-10 mt-auto break-words text-lg font-semibold text-white">Woman kneeling on floor while hands up.</div>
                    </div>
                    </div>
                </div>
                <div class="group relative cursor-pointer overflow-hidden rounded-md">
                    <img src="{{asset('images/image5.jpg')}}" />
                    <div class="absolute inset-0 opacity-0 transition duration-300 group-hover:opacity-100">
                    <div class="pointer-events-none absolute inset-0 bg-black opacity-30"></div>
                    <div class="absolute inset-0 flex flex-col p-8">
                        <button class="mr-auto rounded-full bg-red-500 py-2 px-8 text-sm font-bold text-white">Share</button>
                        <div class="relative z-10 mt-auto break-words text-lg font-semibold text-white">One topless unknown celebrity.</div>
                    </div>
                    </div>
                </div>
                <div class="group relative cursor-pointer overflow-hidden rounded-md">
                    <img src="{{asset('images/image6.jpg')}}" />
                    <div class="absolute inset-0 opacity-0 transition duration-300 group-hover:opacity-100">
                    <div class="pointer-events-none absolute inset-0 bg-black opacity-30"></div>
                    <div class="absolute inset-0 flex flex-col p-8">
                        <button class="mr-auto rounded-full bg-red-500 py-2 px-8 text-sm font-bold text-white">Share</button>
                        <div class="relative z-10 mt-auto break-words text-lg font-semibold text-white">Woman wearing black and white V-neck top.</div>
                    </div>
                    </div>
                </div>
                <div class="group relative cursor-pointer overflow-hidden rounded-md">
                    <img src="{{asset('images/image7.jpg')}}" />
                    <div class="absolute inset-0 opacity-0 transition duration-300 group-hover:opacity-100">
                    <div class="pointer-events-none absolute inset-0 bg-black opacity-30"></div>
                    <div class="absolute inset-0 flex flex-col p-8">
                        <button class="mr-auto rounded-full bg-red-500 py-2 px-8 text-sm font-bold text-white">Share</button>
                        <div class="relative z-10 mt-auto break-words text-lg font-semibold text-white">View the photo by Aiony Haust.</div>
                    </div>
                    </div>
                </div>
                <div class="group relative cursor-pointer overflow-hidden rounded-md">
                    <img src="{{asset('images/image8.jpg')}}" />
                    <div class="absolute inset-0 opacity-0 transition duration-300 group-hover:opacity-100">
                    <div class="pointer-events-none absolute inset-0 bg-black opacity-30"></div>
                    <div class="absolute inset-0 flex flex-col p-8">
                        <button class="mr-auto rounded-full bg-red-500 py-2 px-8 text-sm font-bold text-white">Share</button>
                        <div class="relative z-10 mt-auto break-words text-lg font-semibold text-white">Grayscale photo of woman wearing black spaghetti strap top.</div>
                    </div>
                    </div>
                </div>
                <div class="group relative cursor-pointer overflow-hidden rounded-md">
                    <img src="{{asset('images/image9.jpg')}}" />
                    <div class="absolute inset-0 opacity-0 transition duration-300 group-hover:opacity-100">
                    <div class="pointer-events-none absolute inset-0 bg-black opacity-30"></div>
                    <div class="absolute inset-0 flex flex-col p-8">
                        <button class="mr-auto rounded-full bg-red-500 py-2 px-8 text-sm font-bold text-white">Share</button>
                        <div class="relative z-10 mt-auto break-words text-lg font-semibold text-white">Woman in white shirt lying on bed.</div>
                    </div>
                    </div>
                </div>
            
            
            </div>
        </main>
    </div>
</body>
</html>



