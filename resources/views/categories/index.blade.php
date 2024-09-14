@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <!-- Page Title -->
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Categories</h2>
        <hr class="h-1 bg-gray-800 mb-6">

        <!-- Add Category Button -->
        <div class="text-right mb-6">
            <a href="{{ route('categories.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-amber-700 transition duration-300">Add Category</a>
        </div>

        <!-- Categories Table -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($categories as $category)
                    <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $category->priority }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $category->name }}</td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-600 hover:text-blue-800 transition duration-150 ease-in-out">Edit</a>
                            <a href="{{ route('categories.destroy', $category->id) }}" class="text-red-600 hover:text-red-800 transition duration-150 ease-in-out ml-4" onclick="return confirm('Are you sure to Delete?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
