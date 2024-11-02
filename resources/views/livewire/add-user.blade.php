<div class="flex flex-col items-center justify-center min-h-screen opacity-90">
    <div class="max-w-md w-full px-6 py-8 bg-white rounded-lg shadow-md border-gray-200 border">
        <!-- Login Title -->
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-4 py-8">Registration</h2>
        <!-- Registration Form -->
        <form wire:submit.prevent="addNewUser">
            <!-- First Name Input -->
            <div class="relative mb-4">
                <input wire:model="first_name" type="text" placeholder="First Name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                <span class="absolute right-3 top-1/2 transform -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>                                
                </span>
            </div>
            <!-- Last Name Input -->
            <div class="relative mb-4">
                <input wire:model="last_name" type="text" placeholder="Last Name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                <span class="absolute right-3 top-1/2 transform -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>                  
                </span>
            </div>
            <!-- Email Input -->
            <div class="relative mb-4">
                <input wire:model="email" type="email" placeholder="Email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                <span class="absolute right-3 top-1/2 transform -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                    </svg>                      
                </span>
            </div>
            <!-- Password Input -->
            <div class="relative mb-4">
                <input wire:model="password" type="password" placeholder="Password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                <span class="absolute right-3 top-1/2 transform -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>                  
                </span>
            </div>
            <!-- Agreement Checkbox -->
            <label class="flex items-center mb-8">
                <input wire:model="terms" type="checkbox" class="form-checkbox text-blue-500 border-gray-300">
                <span class="ml-2 text-gray-600">I agree to the terms and conditions</span>
            </label>
            <!-- Register Button -->
            <div class="flex relative mb-4 text-center justify-center">
                <button type="submit" class="text-white rounded-full w-full hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">Register Now</button>
            </div>
        </form>
        <!-- Reset Password and Sign Up Links -->
        <div class="flex justify-between mt-4">
            <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
            <a href="#" class="text-sm text-blue-500 hover:underline">Don't have an account?</a>
        </div>
    </div>
</div>
