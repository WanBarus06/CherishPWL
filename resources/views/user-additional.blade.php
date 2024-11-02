@extends('layouts.account')
@section('title', 'Add Additional Data')


@section('content')
<div class="p-4 sm:ml-64 bg-white">
   <div class="p-4  rounded-lg mt-14">
       <!-- Profile Header -->
       <div class="flex items-center mb-4">
           <!-- Profile Picture -->
           @livewire('profile-picture-upload')
       </div>
       <!-- Divider -->
       <div class="border-b border-gray-300 dark:border-gray-600 mb-4"></div>
       <!-- Form Section -->
       <div class="grid grid-cols-2 gap-4">
           <!-- Left Column (Personal Information) -->
           <div class="p-4 rounded">
            <h2 class="text-3xl font-semibold text-black mb-2">Additional Data</h2>
            <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">

            @csrf
            @method('patch')

            <label class="block font-semibold text-black mb-2" for="phone">Phone Number</label>
            <input type="number" id="phone" value="{{ auth()->user()->phone }}" name="phone" class="block w-full p-2 mb-4 border border-gray-300 rounded">
            @error('phone')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
            
            <label class="block font-semibold text-black mb-2" for="hobby">Hobby</label>
            <input type="text" id="hobby" value="{{ auth()->user()->hobby }}" name="hobby" class="block w-full p-2 mb-4 border border-gray-300 rounded">
            @error('hobby')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
            <div class="flex justify-center mt-4">
            <button type="submit"  class="text-white rounded-full hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">Update</button>
            </div>
            </form>
           </div>
           <!-- Right Column (Additional Data) -->
       </div>
       <!-- Update Button -->
      </div>
</div>
@endsection


