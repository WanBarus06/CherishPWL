  <div>
      <div class="flex flex-col items-center justify-center min-h-screen opacity-90  ">
          <div class="max-w-md w-full px-6 py-8 bg-white rounded-lg shadow-md border-gray-200 border">
            <!-- Login Title -->
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-4 py-8">Registration</h2>
            <!-- Email Input -->
            <form wire:submit.prevent="submit" action="{{ route('register') }}">
            <div class="relative mb-4">
              <input wire:model.lazy="firstName" type="text" placeholder="First Name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="relative mb-4">
              <input wire:model.lazy="lastName" type="text" placeholder="Last Name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="relative mb-4">
              <input wire:model.lazy="email" type="email" placeholder="Email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <!-- Password Input -->
            <div class="relative mb-4">
              <input wire:model.lazy="password" type="password" placeholder="Password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <!-- Agreement Checkbox -->
            <label class="flex items-center mb-8">
              <input type="checkbox" class="form-checkbox text-green-500 border-gray-300">
              <span class="ml-2 text-gray-600">I agree to the terms and conditions</span>
            </label>
            <!-- Login Button -->
            <div class="flex relative mb-4 text-center justify-center">
              <button type="submit" class="text-white rounded-full w-full  hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium  px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">
                Register Now
              <button>
            </div>
            <!-- Reset Password and Sign Up Links -->
            <div class="flex justify-between mt-4">
              <a href="" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
              <a href="route {{ route('login') }}" class="text-sm text-blue-500 hover:underline">Already have an account?</a>
            </div>
          </form>
          </div>
        </div>
  </div>
