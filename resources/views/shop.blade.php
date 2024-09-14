@extends('layouts.master')
@section('content')

<div class="container mx-auto px-4 py-6">
    <div class="bg-gray-100">

        <!-- Container -->
        <div class="container mx-auto p-6">
            <!-- Header -->
            <header class="mb-12 text-center">
                <h1 class="text-5xl font-bold text-gray-800">Shop Our Products</h1>
                <p class="mt-4 text-xl text-gray-600">Find the best products to fit your needs</p>
            </header>
    
            <!-- Search Bar and Category Filter -->
            <form method="GET" action="{{ route('search') }}" class="flex flex-col md:flex-row justify-between mb-10 items-center space-y-4 md:space-y-0">
                <!-- Search Bar -->
                <input type="text" name="search" placeholder="Search products..." value="{{ request('search') }}"
                    class="w-full md:w-1/2 p-4 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" />
    
                <!-- Category Select -->
                <select name="category"
                    class="w-full md:w-1/4 p-4 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
    
                <!-- Search Button -->
                <button type="submit"
                    class="ml-0 md:ml-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg w-full md:w-auto">
                    Search
                </button>
            </form>
    
            <!-- Product Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
               @foreach($products as $product)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('images/products/'.$product->photopath)}}" alt="Product"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-lg font-bold text-gray-800">{{$product->name}}</h2>
                        <p class="text-gray-600">{{$product->category->name}}</p>
                        <p class="text-xl font-bold text-gray-900 mt-4">Rs. {{$product->price}}</p>
                        <a href="{{ route('viewproduct', $product->id) }}"
                            class="block mt-6 bg-green-600 hover:bg-green-700 text-white text-center font-bold py-2 rounded-lg">
                          View Product
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
    
        </div>
    </div>
</div>

@endsection
