@extends('layouts.account')

@section('title', 'Change Password')

@section('content')
<div class="p-4 sm:ml-64 bg-white">
   @if (session('status') === 'password-updated')
<div id="alert-additional-content-3" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 text-green-800 border border-green-300 rounded-lg bg-green-200 z-50" role="alert">
  <div class="flex items-center">
   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
    </svg>    
    <h3 class="text-lg font-medium">Success Change Password</h3>
  </div>
  <div class="mt-2 mb-4 text-sm">
    You have successfully changed your password. Please remember your new password.
  </div>
  <div class="flex justify-center">
    <button type="button" class="text-green-800 bg-transparent border border-green-800 hover:bg-green-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-green-600 dark:border-green-600 dark:text-green-400 dark:hover:text-white dark:focus:ring-green-800" data-dismiss-target="#alert-additional-content-3" aria-label="Close">
      Okay
    </button>
  </div>
</div>
@endif

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
           <div class="p-4 rounded ">
            <form method="post" action="{{ route('password.update') }}" class="space-y-6">
               @csrf
               @method('put')

               <label class="block text-black font-semibold mb-2" for="current_password">Current Password</label>
               <div class="relative">
                   <input type="password" id="current_password" name="current_password" class="block w-full p-2 mb-4 border border-gray-300 rounded" autocomplete="current-password">
                   <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
               </div>

               <label class="block text-black font-semibold mb-2" for="password">New Password</label>
               <div class="relative">
                   <input type="password" id="password" name="password" class="block w-full p-2 mb-4 border border-gray-300 rounded" autocomplete="new-password">
                   <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
               </div>

               <label class="block text-black font-semibold mb-2" for="password_confirmation">Confirm Password</label>
               <div class="relative">
                   <input type="password" id="password_confirmation" name="password_confirmation" class="block w-full p-2 mb-4 border border-gray-300 rounded" autocomplete="new-password">
                   <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
               </div>

               <div class="flex justify-center mt-4">
                   <button type="submit" class="text-white rounded-full hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">Update</button>
                 
               </div>
           </form>
           </div>
           <!-- Right Column (Additional Data) -->
       </div>
       <!-- Update Button -->
      </div>
</div>
@endsection
