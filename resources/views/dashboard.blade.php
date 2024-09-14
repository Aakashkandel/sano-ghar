@extends('layouts.app')
@section('content')
<div class="font-sans antialiased bg-gray-100">
   

   

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h1 class="text-2xl font-semibold mb-6">Dashboard</h1>
            
            <!-- Metrics -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-medium mb-4">Users</h2>
                    <div class="text-3xl font-bold">{{ $userCount }}</div>
                    <p class="text-gray-500">Total registered users</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-medium mb-4">Products</h2>
                    <div class="text-3xl font-bold">{{ $productCount }}</div>
                    <p class="text-gray-500">Total products available</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-medium mb-4">Orders</h2>
                    <div class="text-3xl font-bold">{{ $orderCount }}</div>
                    <p class="text-gray-500">Total orders placed</p>
                </div>
            </div>

            <!-- Latest Users and Products -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-medium mb-4">Latest Users</h2>
                    <ul>
                        @foreach($latestUsers as $user)
                        <li class="flex items-center justify-between border-b py-2">
                            <span class="font-semibold">{{ $user->name }}</span>
                            <span class="text-gray-500 text-sm">{{ $user->created_at->format('d M Y') }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-medium mb-4">Latest Products</h2>
                    <ul>
                        @foreach($latestProducts as $product)
                        <li class="flex items-center justify-between border-b py-2">
                            <span class="font-semibold">{{ $product->name }}</span>
                            <span class="text-gray-500 text-sm">{{ $product->created_at->format('d M Y') }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
