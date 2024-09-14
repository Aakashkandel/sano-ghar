@extends('layouts.master')
@section('content')

<div class="px-24 py-10 bg-gray-50 min-h-screen">
    <!-- Profile Section -->
    <div class="bg-white p-8 rounded-lg shadow-md mb-10">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">My Profile</h2>
        <div class="flex items-center space-x-6">
            <div class="bg-indigo-100 p-4 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 12a6 6 0 100-12 6 6 0 000 12z"/>
                    <path fill-rule="evenodd" d="M5 9a7 7 0 0114 0v4a3 3 0 01-2.707 2.707C15.96 18.05 13.05 20 10 20s-5.96-1.95-6.293-4.293A3 3 0 011 13V9z" clip-rule="evenodd"/>
                </svg>
            </div>
            <div>
                <p class="text-xl font-semibold text-gray-700">Name: {{auth()->user()->name}}</p>
                <p class="text-xl font-semibold text-gray-700 mt-2">Email: {{auth()->user()->email}}</p>
            </div>
        </div>
    </div>

    <!-- Orders Section -->
    <div class="bg-white p-8 rounded-lg shadow-md border-dotted border-black border-spacing-7">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">My Orders</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($orders as $order)
            <div class="bg-gray-100 p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">Order ID: <span class="text-indigo-600">{{$order->id}}</span></p>
                        <p class="text-md text-gray-600 mt-2">Product: <span class="text-indigo-600">{{$order->product->name}}</span></p>
                        <p class="text-md text-gray-600 mt-2">Total Amount: <span class="text-green-600">Rs. {{$order->price * $order->quantity}}</span></p>
                        <p class="text-md text-gray-600 mt-2">Order Date: {{$order->order_date}}</p>
                        <p class="text-md font-semibold text-gray-700 mt-2">Status: <span class="text-yellow-500">{{$order->status}}</span></p>
                    </div>
                    <img src="{{asset('images/products/'.$order->product->photopath)}}" alt="Product Image" class="h-24 w-24 object-cover rounded-lg">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
