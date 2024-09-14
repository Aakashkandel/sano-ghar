@extends('layouts.master')
@section('content')

<!-- Cart Heading -->
<div class="px-6 md:px-24 py-10">
    <h2 class="text-3xl font-bold text-gray-800">Shopping Cart</h2>

    <!-- Cart Items -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-10">
        @foreach($carts as $cart)
        <div class="bg-gray-100 shadow-lg rounded-lg p-6 transition transform hover:scale-105">
            <div class="flex">
                <!-- Product Image -->
                <img src="{{asset('images/products/'.$cart->product->photopath)}}" alt="product" class="w-24 h-24 rounded-lg object-cover border border-gray-200 mr-4">
                
                <!-- Product Details -->
                <div>
                    <h3 class="text-xl font-bold text-gray-700">{{$cart->product->name}}</h3>
                    <p class="text-lg text-indigo-600 font-semibold mt-2">Rs. {{$cart->product->price}}</p>
                    <p class="text-sm text-gray-500 mt-2">Quantity: {{$cart->quantity}}</p>
                </div>
            </div>

            <!-- Cart Actions -->
            <div class="mt-6 flex justify-between items-center">
                <!-- Order Now Button -->
                <form action="{{route('order.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="cart_id" value="{{$cart->id}}">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow-lg transition duration-300 ease-in-out">
                        Order Now
                    </button>
                </form>

                <!-- Remove Button -->
                <a href="{{route('cart.remove',$cart->id)}}" class="text-red-600 hover:text-red-700 transition duration-300 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    Remove
                </a>
            </div>
        </div>
        @endforeach
    </div>

    
</div>

@endsection
