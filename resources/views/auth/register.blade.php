<x-guest-layout>
        <div class="max-w-4xl w-full px-6 py-8 bg-white rounded-lg shadow-md border-gray-200 border">
            <!-- Registration Title -->
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-8">Registration</h2>

            <!-- Registration Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- First Name -->
                    <div class="relative mb-4">
                        <label for="first-name" class="text-black">First Name</label>
                        <input id="first-name" class="block mt-1 w-full bg-white border border-black text-black rounded-md px-4 py-2" type="text" name="first_name" :value="old('first_name')" required autofocus />
                        @error('first_name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div class="relative mb-4">
                        <label for="last-name" class="text-black">Last Name</label>
                        <input id="last-name" class="block mt-1 w-full bg-white border border-black text-black rounded-md px-4 py-2" type="text" name="last_name" :value="old('last_name')" required />
                        @error('last_name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Email Address -->
                <div class="relative mb-4">
                    <label for="email" class="text-black">Email</label>
                    <input id="email" class="block mt-1 w-full bg-white border border-black text-black rounded-md px-4 py-2" type="email" name="email" :value="old('email')" required />
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="relative mb-4">
                    <label for="password" class="text-black">Password</label>
                    <input id="password" class="block mt-1 w-full bg-white border border-black text-black rounded-md px-4 py-2" type="password" name="password" required autocomplete="new-password" />
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="relative mb-4">
                    <label for="password_confirmation" class="text-black">Confirm Password</label>
                    <input id="password_confirmation" class="block mt-1 w-full bg-white border border-black text-black rounded-md px-4 py-2" type="password" name="password_confirmation" required autocomplete="new-password" />
                    @error('password_confirmation')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Agreement Checkbox -->
                <div class="relative mb-8">
                    <label class="flex items-center text-black">
                        <input type="checkbox" name="terms" class="form-checkbox text-green-500 border-gray-300">
                        <span class="ml-2">I agree to the terms and conditions</span>
                    </label>
                    @error('terms')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Register Button -->
                <div class="relative mb-4 text-center">
                    <button type="submit" class="text-white rounded-full w-full hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">
                        Register Now
                    </button>
                </div>

                <!-- Reset Password and Sign In Links -->
                <div class="relative mt-4 flex justify-between">
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
                    <a href="{{ route('login') }}" class="text-sm text-blue-500 hover:underline">Already have an account?</a>
                </div>
            </form>
        </div>

</x-guest-layout>
