@extends('layouts.admin')
@section('title', 'Create')
@section('content')
<div class="bg-white p-4 sm:ml-64 rounded-lg shadow-md mb-8">
    <h2 class="text-2xl font-semibold text-gray-700 mb-6">Create User</h2>
    <div class="flex">
        <!-- Form starts here -->
        <form action="{{ route('admin.store') }}" method="post" class="w-full space-y-4">
            @csrf
            <!-- Left section -->
            <div class="w-1/2 pr-4">
                <input type="text" name="first_name" placeholder="First Name" required class="px-4 py-2 border rounded-lg text-gray-700 w-full mb-4">
                <input type="text" name="last_name" placeholder="Last Name" required class="px-4 py-2 border rounded-lg text-gray-700 w-full mb-4">
                <input type="email" name="email" placeholder="Email" required class="px-4 py-2 border rounded-lg text-gray-700 w-full mb-4">
                <input type="password" name="password" placeholder="Password" required class="px-4 py-2 border rounded-lg text-gray-700 w-full mb-4">
            </div>
            <!-- Right section -->
            <div class="w-1/2 ">
                <input type="text" name="hobby" placeholder="Hobby" class="px-4 py-2 border rounded-lg text-gray-700 w-full mb-4">
                <input type="number" name="phone" placeholder="Phone Number" class="px-4 py-2 border rounded-lg text-gray-700 w-full mb-4">
            </div>
            <!-- Submit button -->
            <div class="text-center w-full mt-4">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</button>
            </div>
        </form>
        <!-- Form ends here -->
    </div>
</div>

        
        <!-- Input News section -->
        <div class="bg-white p-4 sm:ml-64 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Create Article</h2>
            <form action="{{ route('article.store') }}" method="post" class="space-y-4" enctype="multipart/form-data">
                <!-- Article fields -->
                @csrf
                <input type="text" name="title" placeholder="Title" required class="px-4 py-2 border rounded-lg text-gray-700 w-full">
                <x-forms.tinymce-editor/>
                <input type="file" name="image" placeholder="Image URL" required class="px-4 py-2 border rounded-lg text-gray-700 mb-4 w-full">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</button>
            </form>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
@endsection
