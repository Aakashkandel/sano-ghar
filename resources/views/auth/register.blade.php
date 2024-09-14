<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Ecommerce</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body class="bg-gray-50">
    <div class="grid grid-cols-1 md:grid-cols-2 h-screen">
        <!-- Image Section -->
        <div class="relative">
            <a href="{{route('home')}}" class="absolute bg-blue-500 text-white px-4 py-2 m-4 rounded-lg shadow-lg hover:bg-blue-600 transition">Go Home</a>
            <img src="{{asset('images/photo/register2.png')}}" alt="Ecommerce" class="w-full h-full object-cover">
        </div>
        <!-- Form Section -->
        <div class="flex items-center justify-center p-6 md:p-12">
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Register to SanoGhar</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <input type="text" name="name" placeholder="Name" required
                            class="border border-gray-300 p-3 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <input type="email" name="email" placeholder="Email" required
                            class="border border-gray-300 p-3 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <input type="password" name="password" placeholder="Password" required
                            class="border border-gray-300 p-3 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-6">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required
                            class="border border-gray-300 p-3 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <button type="submit"
                        class="bg-blue-500 text-white py-3 w-full rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                        Register
                    </button>
                </form>
                <p class="mt-4 text-center text-gray-600">Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>
