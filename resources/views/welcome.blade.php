@extends('layouts.master')
@section('content')

<!-- Hero Section -->
<section class="relative bg-gray-900 text-white">
    <div class="absolute inset-0 overflow-hidden opacity-15">
        <img  src="{{asset('picture/hero3.jpg')}}" alt="Hero Image" class="w-full h-full object-cover object-center">
    </div> 
    <div class="relative z-10 max-w-7xl mx-auto px-6 py-24 text-center">
        <h1 class="text-5xl font-bold mb-4">Discover the Best Accessories</h1>
        <p class="text-xl mb-8">Explore our exquisite collection of jewelry, cosmetics, shoes, and clothing for both men and women.</p>
        <a href="{{route('shop')}}" class="inline-block bg-yellow-500 text-gray-900 px-6 py-3 rounded-lg text-lg font-semibold hover:bg-yellow-400">Shop Now</a>
    </div>
</section>

<!-- Latest Products Section -->
<section id="shop" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-12 text-center">Latest Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($latestproducts as $product)
            <div class="bg-gray-100 p-4 rounded-lg shadow-lg">
                <img src="{{asset('images/products/'.$product->photopath)}}" alt="Product Image" class="w-full h-48 object-cover object-center rounded-md mb-4">
                <h3 class="text-xl font-semibold mb-2">Elegant Necklace</h3>
                <p class="text-gray-700 mb-4">{{$product->price}}</p>
                <a href="{{ route('viewproduct', $product->id) }}" class="inline-block bg-yellow-500 text-gray-900 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-yellow-400">View Details</a>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Testimonials Section -->
<section class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-12 text-center">What Our Customers Say</h2>
        <div class="flex flex-wrap justify-center">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-xs mx-4 mb-6">
                <p class="text-gray-700 mb-4">"Absolutely love the accessories! They’ve become a staple in my wardrobe."</p>
                <p class="font-semibold">Prakriti Devkota</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-xs mx-4 mb-6">
                <p class="text-gray-700 mb-4">"Fantastic quality and fast shipping. Will definitely shop here again."</p>
                <p class="font-semibold">Ishika Sigdel</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-xs mx-4 mb-6">
                <p class="text-gray-700 mb-4">"Great selection of trendy accessories at affordable prices!"</p>
                <p class="font-semibold">Mamta Sharma</p>
            </div>
        </div>
    </div>
</section>





@endsection
