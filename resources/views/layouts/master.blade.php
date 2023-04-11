<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script>
          function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
          }

          // Close the dropdown menu if the user clicks outside of it
          window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
              var dropdowns = document.getElementsByClassName("dropdown-content");
              var i;
              for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                  openDropdown.classList.remove('show');
                }
              }
            }
          }
        </script>
    </head>
    <body>
        @section('navbar')
        <nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 w-full top-0 left-0 border-b border-gray-200 dark:border-gray-600">
          <div class="container flex flex-wrap items-center justify-between mx-auto">
          <a href="/" class="flex items-center h-max">
              <img src="images/Nu-Swift.png" class="h-max mr-3 sm:h-9" alt="Nu-Swift Logo">
          </a>
          <div class="flex md:order-2">
            @auth
            <p class="font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">{{ Auth::user()->name}}</p>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  {{ __('Log Out') }}
              </x-dropdown-link>
            </form>
            @endauth

            @guest
              <button type="button" onclick="window.location.href='/login'" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
              <a href="/register" class="font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">Sign up</a>
              <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            @endguest
          </div>

          <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
              <input type="text" placeholder="Search..">
              <button class="h-full border" type="button" onclick="alert('Hello world!')">Click Me!</button>
          </div>
          </div>
        </nav>
        <div class="inline-block bg-black w-full h-12 py-1.5">
          <ul class="text-white text-center list-none h-full block relative">
              <li class="inline-block float-none w-auto py-auto px-5 h-full"><a href="/products" class="mx-auto text-lg">Products</a></li>
              <li class="inline-block float-none w-auto py-auto px-5 h-full"><a href="/department" class="mx-auto text-lg">Department</a></li>
              <li class="inline-block float-none w-auto py-auto px-5 h-full"><a href="/documents" class="mx-auto text-lg">Documents</a></li>
          </ul>
        </div>
        @show
            @yield('content')
    </body>
</html>
