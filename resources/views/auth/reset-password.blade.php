<!-- resources/views/auth/reset-password.blade.php -->

<x-guest-layout>
        <form method="POST" action="{{ route('password.store') }}" class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input id="email" class="block mt-1 w-full p-2 border border-gray-300 rounded" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                @error('email')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input id="password" class="block mt-1 w-full p-2 border border-gray-300 rounded" type="password" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                <input id="password_confirmation" class="block mt-1 w-full p-2 border border-gray-300 rounded" type="password" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="text-white rounded-full hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium  px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
</x-guest-layout>
