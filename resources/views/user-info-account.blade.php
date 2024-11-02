@extends('layouts.account')
@section('title', 'Your Account')

@section('content')
<div class="p-4 sm:ml-64 bg-white">
   <div class="p-4  rounded-lg mt-14">
       <!-- Profile Header -->
       <div class="flex items-center mb-4">
        @livewire('profile-picture-upload')
       </div>
       <!-- Divider -->
       <div class="border-b border-gray-300 dark:border-gray-600 mb-4"></div>
       <!-- Form Section -->
       <div class="grid grid-cols-2 gap-4">
           <!-- Left Column (Personal Information) -->
           <div class="p-4 rounded">
               <h2 class="text-3xl font-semibold text-black mb-2">Personal Information</h2>
               <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                   @csrf
                   @method('patch')

                   <div>
                       <label for="first-name" class="block font-semibold text-black mb-2">First Name</label>
                       <input type="text" id="first-name" name="first_name" value="{{ auth()->user()->first_name }}" class="block w-full p-2 mb-4 border border-gray-300 rounded" required autofocus />
                       @error('first_name')
                           <p class="text-sm text-red-500">{{ $message }}</p>
                       @enderror
                   </div>

                   <div>
                       <label for="last-name" class="block font-semibold text-black mb-2">Last Name</label>
                       <input type="text" id="last-name" name="last_name" value="{{ auth()->user()->last_name }}" class="block w-full p-2 mb-4 border border-gray-300 rounded" required />
                       @error('last_name')
                           <p class="text-sm text-red-500">{{ $message }}</p>
                       @enderror
                   </div>

                   <div>
                       <label for="email" class="block font-semibold text-black mb-2">Email</label>
                       <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" class="block w-full p-2 mb-4 border border-gray-300 rounded" disabled />
                   </div>


                   <div class="flex items-center gap-4">
                       <button type="submit" class="text-white rounded-full hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">Save</button>

                       @if (session('status') === 'profile-updated')
                           <p
                               x-data="{ show: true }"
                               x-show="show"
                               x-transition
                               x-init="setTimeout(() => show = false, 2000)"
                               class="text-sm text-gray-600 dark:text-gray-400"
                           >{{ __('Saved.') }}</p>
                       @endif
                   </div>
               </form>
           </div>
           <!-- Right Column (Additional Data) -->
           <div class="p-4 rounded">
               <h2 class="text-3xl font-semibold text-black mb-2">Additional Data</h2>
               <label class="block font-semibold text-black mb-2" for="phone">Phone Number</label>
               <input type="text" id="phone" value="{{ auth()->user()->phone }}" class="block w-full p-2 mb-4 border border-gray-300 rounded" disabled>

               <label class="block font-semibold text-black mb-2" for="hobby">Hobby</label>
               <input type="text" id="hobby" value="{{ auth()->user()->hobby }}" class="block w-full p-2 mb-4 border border-gray-300 rounded" disabled>

           </div>
       </div>
   </div>
</div>
@endsection
