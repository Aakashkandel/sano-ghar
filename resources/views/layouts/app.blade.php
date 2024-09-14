<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    @if(Session::has('success'))
    <div class="fixed top-4 right-4 rounded-lg shadow-md bg-blue-600 text-white px-5 py-3" id="message">
        <p>{{ session('success') }}</p>
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('message').style.display = 'none';
        }, 2000);
    </script>
    @endif

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white shadow-md">
            <div class="p-4  text-center items-center justify-center border-b border-gray-700">
                <h2 class="text-2xl font-bold ">SanoGhar</h2>
               <div>
                <p class="">Admin Panel</p>
               </div>
            </div>
            <nav class="mt-6">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-lg hover:bg-gray-700 transition duration-150 ease-in-out">
                    <svg class="w-6 h-6 mr-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2 2 4-4m0 0l4 4 8-8"></path>
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('categories.index') }}" class="flex items-center px-4 py-3 text-lg hover:bg-gray-700 transition duration-150 ease-in-out">
                    <svg class="w-6 h-6 mr-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    Categories
                </a>
                <a href="{{ route('products.index') }}" class="flex items-center px-4 py-3 text-lg hover:bg-gray-700 transition duration-150 ease-in-out">
                    <svg class="w-6 h-6 mr-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7h7m-7-14h7M3 6h14m-7 12v-6"></path>
                    </svg>
                    Products
                </a>
                <a href="{{route('users.index')}}" class="flex items-center px-4 py-3 text-lg hover:bg-gray-700 transition duration-150 ease-in-out">
                    <svg class="w-6 h-6 mr-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 21v-2a4 4 0 00-8 0v2M12 12a4 4 0 110-8 4 4 0 010 8zm0 0v-2m0 0V4m0 8h4m-4 0H8m4 0v4"></path>
                    </svg>
                    Users
                </a>
                <a href="{{ route('orders.index') }}" class="flex items-center px-4 py-3 text-lg hover:bg-gray-700 transition duration-150 ease-in-out">
                    <svg class="w-6 h-6 mr-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 11h18m-7 4h7m-7 4h7M3 15h7"></path>
                    </svg>
                    Orders
                </a>
                <form action="{{ route('logout') }}" method="post" class="mt-6">
                    @csrf
                    <button type="submit" class="flex items-center w-full text-left px-4 py-3 text-lg hover:bg-gray-700 transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 mr-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7"></path>
                        </svg>
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
