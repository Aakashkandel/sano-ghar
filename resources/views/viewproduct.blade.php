@extends('layouts.master')
@section('content')

<!-- Product Details Section -->
<div class="container mx-auto px-4 md:px-24 py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Product Image -->
        <div class="col-span-1">
            <div class="relative group">
                <img src="{{asset('images/products/'.$product->photopath)}}" alt="product" class="w-full h-80 object-cover rounded-lg shadow-lg transition duration-500 ease-in-out transform group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-75 transition duration-500 ease-in-out"></div>
            </div>
        </div>
        
        <!-- Product Information -->
        <div class="col-span-2 flex flex-col justify-between">
            <div>
                <h1 class="text-5xl font-bold text-gray-800 mb-4">{{$product->name}}</h1>
                <p class="text-3xl font-semibold text-indigo-600 mb-6">Rs. {{$product->price}}</p>
                <p class="text-lg text-gray-600 leading-relaxed mb-6">{{$product->description}}</p>
            </div>

            <!-- Add to Cart Form -->
            <form action="{{route('cart.store')}}" method="POST" class="mt-4">
                @csrf
                <div class="flex items-center space-x-6 mb-6">
                    <input type="number" class="w-20 h-12 border border-gray-300 rounded-lg text-center focus:ring-2 focus:ring-indigo-500" value="1" name="quantity" min="1" max="{{$product->stock}}">
                    <div class="text-sm text-red-600 font-medium">In Stock: {{$product->stock}}</div>
                </div>
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-6 py-3 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                    Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Delivery Information Section -->
<div class="container mx-auto px-4 md:px-24 py-12 bg-gray-50 rounded-lg shadow-md">
    <h3 class="text-xl font-semibold text-gray-800 mb-6">Why Shop with Us?</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="flex items-center">
            <svg class="w-6 h-6 text-green-500 mr-3" fill="currentColor" viewBox="0 0 24 24">
                <path d="M10 20.02L4.27 14.29l1.41-1.41 4.32 4.3 7.88-7.88 1.41 1.42L10 20.02z"/>
            </svg>
            <p class="text-md text-gray-600">Free Delivery on Orders Above Rs. 1000</p>
        </div>
        <div class="flex items-center">
            <svg class="w-6 h-6 text-green-500 mr-3" fill="currentColor" viewBox="0 0 24 24">
                <path d="M10 20.02L4.27 14.29l1.41-1.41 4.32 4.3 7.88-7.88 1.41 1.42L10 20.02z"/>
            </svg>
            <p class="text-md text-gray-600">7-Day Easy Return Policy</p>
        </div>
        <div class="flex items-center">
            <svg class="w-6 h-6 text-green-500 mr-3" fill="currentColor" viewBox="0 0 24 24">
                <path d="M10 20.02L4.27 14.29l1.41-1.41 4.32 4.3 7.88-7.88 1.41 1.42L10 20.02z"/>
            </svg>
            <p class="text-md text-gray-600">Secure Payment Options</p>
        </div>
    </div>
</div>

<!-- Related Products Section -->
<div class="container mx-auto px-4 md:px-24 py-12">
    <h2 class="text-4xl font-bold text-gray-800 mb-8">Related Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
        @foreach($relatedproducts as $product)
        <a href="{{route('viewproduct',$product->id)}}" class="group block">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{asset('images/products/'.$product->photopath)}}" alt="product" class="w-full h-56 object-cover transition duration-500 ease-in-out transform group-hover:scale-105">
                <div class="p-6 bg-gray-50">
                    <h3 class="text-lg font-semibold text-gray-800 group-hover:text-indigo-600 transition duration-300 ease-in-out">{{$product->name}}</h3>
                    <p class="text-md font-light text-indigo-600 mt-2">Rs. {{$product->price}}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection
