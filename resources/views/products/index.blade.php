@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <!-- Page Title -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-extrabold text-gray-800">Products</h2>
            <a href="{{ route('products.create') }}" class="bg-blue-800 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-blue-700 transition duration-300">Add Product</a>
        </div>
        <hr class="h-1 bg-gray-800 mb-8">

        <!-- Products Table -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Picture</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product Name</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($products as $product)
                    <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                        <td class="px-6 py-4 text-center">
                            <img src="{{ asset('images/products/' . $product->photopath) }}" class="w-32 h-auto object-cover mx-auto rounded-lg shadow-sm" alt="{{ $product->name }}">
                        </td>
                        <td class="px-6 py-4 text-gray-900 font-medium">{{ $product->name }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $product->description }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $product->price }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $product->stock }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $product->category->name }}</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="{{ route('products.edit', $product->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600 transition duration-150 ease-in-out">Edit</a>
                            <a href="{{ route('products.destroy', $product->id) }}" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 transition duration-150 ease-in-out" onclick="return confirm('Are you sure to Delete?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
