<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <style>
        /* Custom styles for the navbar */
        .navbar {
            background-color: #003366; /* Dark Blue for a professional look */
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .navbar h2 {
            font-size: 1.875rem; /* 3xl */
            font-weight: bold;
            color: #ffffff;
        }
        .navbar a {
            color: #ffffff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .navbar a:hover {
            background-color: #00509e; /* Slightly lighter blue */
            color: #ffffff;
            border-radius: 0.375rem; /* Rounded corners */
        }
        .navbar .auth-links {
            display: flex;
            gap: 1rem;
        }
        .navbar .auth-links form button {
            background: none;
            border: none;
            color: #ffffff;
            cursor: pointer;
            font-size: 1.25rem;
        }
        .navbar .auth-links form button:hover {
            color: #00509e; /* Hover color matching the link hover effect */
        }
        .navbar .auth-links a {
            background-color: #00509e; /* Blue color for buttons */
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: bold;
        }
        .navbar .auth-links a:hover {
            background-color: #003366; /* Darker blue on hover */
        }
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }
            .navbar a {
                padding: 0.5rem 0;
            }
        }
    </style>
</head>
<body>
    @if(Session::has('success'))
        <div class="fixed top-4 right-4 rounded-lg shadow-md bg-blue-600 text-white px-5 py-3" id="message">
            <p>{{session('success')}}</p>
        </div>
        <script>
            setTimeout(() => {
                document.getElementById('message').style.display = 'none';
            }, 2000);
        </script>
    @endif

    <!-- Navigation Bar -->
    <nav class="navbar ">
        <h2 class="text-3xl">SanoGhar</h2>
        <div class="flex gap-6 items-center">
            <a href="{{route('home')}}" class="text-lg font-semibold hover:underline">Home</a>
            <a href="{{route('shop')}}" class="text-lg font-semibold hover:underline">Shop</a>
            <a href="{{route('about')}}" class="text-lg font-semibold hover:underline">About Us</a>
            @auth
                <a href="{{route('myprofile')}}" class="text-xl font-semibold hover:underline">Hi, {{auth()->user()->name}}</a>
                <a href="{{route('mycart')}}" class="text-xl font-semibold hover:underline"><i class="ri-shopping-cart-2-line text-xl"></i></a>
                <form action="{{route('logout')}}" method="post" class="auth-links">
                    @csrf
                    <button type="submit"><i class="ri-logout-box-r-line text-2xl text-yellow-400"></i></button>
                </form>
            @else
                <div class="auth-links">
                    <a href="/login" class="text-lg font-semibold">Login</a>
                    <a href="/register" class="text-lg font-semibold">Register</a>
                </div>
            @endauth
        </div>
    </nav>

    @yield('content')

    <footer class="py-8 bg-gray-800 text-white text-center">
        <p>&copy; 2024 All Rights Reserved By SanoGhar. | <a href="mailto:demo@gmail.com" class="underline">Contact Us</a></p>
        <div class="mt-4">
            <a href="#" class="inline-block mx-2 text-yellow-400 hover:text-yellow-300">Home</a>
            <a href="#" class="inline-block mx-2 text-yellow-400 hover:text-yellow-300">About</a>
            <a href="#" class="inline-block mx-2 text-yellow-400 hover:text-yellow-300">Shop</a>
            <a href="#" class="inline-block mx-2 text-yellow-400 hover:text-yellow-300">Blog</a>
        </div>
    </footer>
</body>
</html>
