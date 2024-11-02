<x-guest-layout>
        <div class="container max-w-md mx-auto px-4 py-8 bg-white rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Forgot Password</h2>
            @if (session('status'))
                <div class=" text-black p-4 rounded mb-4">
                    {{ session('status') }}
                </div>
            @endif
    
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="text-white rounded-full hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium  px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">Send Password Reset Link</button>
                </div>
            </form>
        </div>
</x-guest-layout>
