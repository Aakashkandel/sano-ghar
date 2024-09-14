<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// @extends('layouts.app')

// @section('content')
//     <div class="container mx-auto px-6 py-8">
//         <!-- Page Title -->
//         <div class="flex items-center justify-between mb-6">
//             <h2 class="text-3xl font-extrabold text-amber-600">User Details</h2>
//         </div>
//         <hr class="h-1 bg-amber-600 mb-8">

//         <!-- User Details -->
//         <div class="bg-white shadow-lg rounded-lg overflow-hidden">
//             <div class="p-6">
//                 <div class="flex items-center mb-6">
//                     <div class="w-24 h-24 rounded-full overflow-hidden bg-gray-200 flex items-center justify-center">
//                         @if($user->profile_picture)
//                             <img src="{{ asset('images/users/' . $user->profile_picture) }}" class="w-full h-full object-cover" alt="{{ $user->name }}">
//                         @else
//                             <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
//                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 5.121a7.5 7.5 0 0110.606 0m2.83 2.829a7.5 7.5 0 010 10.606m-10.606 0a7.5 7.5 0 01-10.606-10.606m2.83-2.83a7.5 7.5 0 0110.606 0m-5.707 5.707a1.5 1.5 0 01-2.12 0m2.121 2.121a1.5 1.5 0 01-2.121 0"></path>
//                             </svg>
//                         @endif
//                     </div>
//                     <div class="ml-6">
//                         <h3 class="text-2xl font-semibold text-gray-900">{{ $user->name }}</h3>
//                         <p class="text-gray-600">{{ $user->email }}</p>
//                         <p class="text-gray-600">Joined on {{ $user->created_at->format('M d, Y') }}</p>
//                     </div>
//                 </div>

//                 <!-- User Info -->
//                 <div class="border-t border-gray-200 pt-6">
//                     <h4 class="text-xl font-semibold text-gray-700 mb-4">User Information</h4>
//                     <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
//                         <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
//                             <h5 class="text-lg font-medium text-gray-800">Phone Number</h5>
//                             <p class="text-gray-600">{{ $user->phone ?? 'N/A' }}</p>
//                         </div>
//                         <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
//                             <h5 class="text-lg font-medium text-gray-800">Address</h5>
//                             <p class="text-gray-600">{{ $user->address ?? 'N/A' }}</p>
//                         </div>
//                     </div>
//                 </div>

//                 <!-- Actions -->
//                 <div class="mt-8 flex space-x-4">
//                     <a href="{{ route('users.edit', $user->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600 transition duration-150 ease-in-out">Edit</a>
//                     <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')" class="inline">
//                         @csrf
//                         @method('DELETE')
//                         <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 transition duration-150 ease-in-out">Delete</button>
//                     </form>
//                 </div>
//             </div>
//         </div>
//     </div>
// @endsection

class UserController extends Controller
{
    
    public function index()
    {

        $users = User::all();
        return view('users.index', compact('users'));


    }
}
