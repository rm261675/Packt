<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Packt Test</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
<body>
<!-- Navbar -->
    <nav class="bg-white shadow-lg py-4 md:py-0">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex-1 flex items-center justify-center sm:justify-start sm:items-center">
                    <img class="h-8 w-auto bg-white" src="/images/packt-logo.webp" alt="Logo">
                </div>					
                <div class="flex space-x-7">
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#" class="py-4 px-2 text-gray-900 border-b-4 border-yellow-400 font-semibold ">Home</a>
                    <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-900 transition duration-300">All Books</a>
                    <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-900 transition duration-300">Subscribe</a>
                    <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-900 transition duration-300">Contact Us</a>
                </div>
                <div class="hidden md:flex items-center space-x-3 ">
                    <a href="#" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-blue-600 hover:text-white transition duration-300">Log In</a>
                    <a href="#" class="flex content-center py-2 px-4 font-medium text-white bg-red-400 rounded hover:bg-blue-600 transition duration-300">Sign Up</a>
                </div>
                </div>
                <!-- Mobile menu -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-black "
                        x-show="!showMenu"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                </div>
            </div>
        </div>
        <div class="hidden mobile-menu mt-3 absolute inset-x-0 bg-white md:hidden">
            <ul class="">
                <li class="active"><a href="index.html" class="block text-lg px-4 py-4 text-black bg-blue-200 font-semibold">Home</a></li>
                <li><a href="#" class="block text-lg px-4 py-4 hover:bg-blue-200 transition duration-300">All Books</a></li>
                <li><a href="#" class="block text-lg px-4 py-4 hover:bg-blue-200 transition duration-300">Subscribe</a></li>
                <li><a href="#" class="block text-lg px-4 py-4 hover:bg-blue-200 transition duration-300">Contact Us</a></li>
            </ul>
        </div>
        <script>
            const btn = document.querySelector("button.mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        </script>
    </nav>
<!--Navbar End -->
<!--Hero Section -->
    <div class="flex flex-col items-center py-20 bg-blue-50">
        <h1 class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl">Advance Your Knowledge in tech</h1>
            <p class="mt-3 text-center text-base text-gray-900 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                 Get all the quality content you'll ever need to stay ahead with a packt subscription - access 7,500 online books and videos on everything in tech.
            </p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
          <div class="rounded-md shadow">
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-semibold rounded-md text-white bg-indigo-500 hover:bg-indigo-600 md:py-4 md:text-lg md:px-10"> 
                 Subscribe Now 
                </a>
           </div>
          <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-semibold rounded-md text-indigo-600 bg-white hover:bg-indigo-200 md:py-4 md:text-lg md:px-10"> 
                 Try Samples 
                </a>
          </div>
        </div>
    </div>
<!--Hero Section End -->
<!-- Books List section -->
    <div class="py-12 flex flex-col items-center">
        <div class="w-10/12 grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            @foreach ($responseBody['products'] as $products)
            <div class="group bg-gray-50 p-4 rounded-md">
                <div class="w-full bg-gray-200 rounded-lg overflow-hidden">
                    <img src="/images/sample-cover.png" class="w-full h-full object-center object-cover">
                </div>
                <h3 class="mt-4 text-2xl text-gray-900">{{$products['title']}}</h3> 
                {{-- <p class="mt-2 text-md font-medium text-gray-600">by: </p>
                    @foreach($products['authors'] as $author)
                        <p class="mt-2 text-md font-medium text-gray-600">{{$author}}</p>
                    @endforeach --}}
                <p class="mt-3 text-xl font-medium text-gray-800">$48 (Sample)</p>
                <a href="#" class="flex items-center justify-center px-8 py-3 rounded-md bg-red-400 text-white font-semibold text-lg my-4">Buy Now</a>
                <p class="flex items-center justify-center mt-2 text-sm font-medium text-gray-600">ISBN: {{$products['id']}}</p>
            </div>
            @endforeach
        </div>
    </div>
<!-- Books List section End -->
<!-- Features section -->
    <section class="text-gray-600 bg-blue-50 body-font">
        <div class="container px-5 py-24 mx-auto flex items-center justify-center flex-wrap">
            <h2 class="text-2xl tracking-tight font-extrabold text-gray-700 sm:text-2xl md:text-3xl mb-6">Features</h2>
            <div class="flex flex-wrap m-4">
                <div class="p-4 lg:w-1/2 md:w-full">
                    <div class="flex border-2 rounded-lg bg-white border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                        <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 text-lg title-font font-semibold mb-3">Quality Content</h2>
                            <p class="leading-relaxed text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2 md:w-full">
                    <div class="flex border-2 rounded-lg bg-white border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                        <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 text-lg title-font font-semibold mb-3">Unique Resources</h2>
                            <p class="leading-relaxed text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap m-4">
                <div class="p-4 lg:w-1/2 md:w-full">
                    <div class="flex border-2 rounded-lg bg-white border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                        <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 text-lg title-font font-semibold mb-3">Quality Content</h2>
                            <p class="leading-relaxed text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2 md:w-full">
                    <div class="flex border-2 rounded-lg bg-white border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                        <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 text-lg title-font font-semibold mb-3">Unique Resources</h2>
                            <p class="leading-relaxed text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Features section end -->
</body>
<footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <img class="h-8 w-auto bg-white" src="/images/packt-logo.webp" alt="Logo">
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
        © 2020 Packt
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a href="#" class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a href="#" class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a href="#" class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a href="#" class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>
<!-- API Raw data consumption test -->
  {{-- @foreach ($responseBody['products'] as $products)
  <h4 class="mt-2 text-lg font-medium text-gray-700 dark:text-gray-200">{{$products['id']}}</h4>
  <h4 class="mt-2 text-lg font-medium text-gray-700 dark:text-gray-200">{{$products['title']}}</h4>
      @foreach($products['authors'] as $author)
      <h4 class="mt-2 text-lg font-medium text-gray-700 dark:text-gray-200">{{$author}}</h4>
      @endforeach
    @endforeach --}}
<!-- API Raw data consumption test end -->
</html>
