@extends('layouts.master')

@section('content')

<!-- About Us Section -->
<div class="bg-gray-50 py-12 px-6">
    <!-- Project Details -->
    <div class="container mx-auto flex flex-col md:flex-row items-center">
        <!-- Image -->
        <div class="md:w-1/2 mb-6 md:mb-0">
            <img src="{{ asset('images/photo/project.jpeg') }}" alt="Project Image" class="w-full h-full object-cover rounded-lg shadow-md">
        </div>
        
        <!-- Project Details Text -->
        <div class="md:w-1/2 md:pl-8">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-4">SanoGhar</h1>
            <p class="text-lg text-gray-600 mb-6">
                Welcome to our eCommerce site dedicated to providing you with the finest jewelry accessories. Our platform is designed to offer a seamless shopping experience where you can find and purchase high-quality jewelry items effortlessly. We leverage advanced search mechanisms to ensure that you can easily locate any item you need with just a few clicks.
            </p>
            <p class="text-lg text-gray-600 mb-6">
                A standout feature of our site is the integration of <span class="font-bold text-blue-600">eSewa</span>, allowing you to make payments directly and securely. This convenient payment option ensures a smooth and hassle-free checkout process, enhancing your shopping experience.
            </p>
            <p class="text-lg text-gray-600">
                Our mission is to deliver exceptional value by combining cutting-edge technology with a user-friendly interface. We are committed to providing an efficient and enjoyable shopping journey for all our customers.
            </p>
        </div>
    </div>
</div>

<!-- Our Team Section -->
<div class="bg-white py-12 px-6">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-8">Meet Our Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Developer -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <img src="{{ asset('images/photo/pramisha.png') }}" alt="Developer" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-indigo-600">
                <h3 class="text-xl font-bold text-gray-800">Pranisha Thapa</h3>
                <p class="text-lg text-gray-600">Developer</p>
            </div>

            <!-- Designer -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <img src="{{ asset('images/photo/ishika.jpg') }}" alt="Designer" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-green-600">
                <h3 class="text-xl font-bold text-gray-800">Ishika Sigdel</h3>
                <p class="text-lg text-gray-600">Designer</p>
            </div>

            <!-- Project Manager -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <img src="{{ asset('images/photo/mamta.png') }}" alt="Project Manager" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-blue-600">
                <h3 class="text-xl font-bold text-gray-800">Mamta Sharma</h3>
                <p class="text-lg text-gray-600">Project Manager</p>
            </div>
        </div>
    </div>
</div>

@endsection
