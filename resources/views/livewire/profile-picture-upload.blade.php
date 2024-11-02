<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($user->profile_picture)
        <div class="rounded-full bg-gray-50 h-24 w-24 flex items-center justify-center">
            <img src="{{ Storage::url($user->profile_picture) }}" alt="Profile Picture" class="rounded-full h-full w-full object-cover">
        </div>
    @endif

    <div class="ml-4">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-black">{{ $user->first_name }} {{ $user->last_name }}</h1>
        <h1 class="text-sm font-bold text-gray-900 dark:text-black">{{ $user->email }}</h1>
        <a href="#" wire:click.prevent="toggleUploadForm" class="text-md underline text-gray-500 font-bold">Edit Profile Picture</a>
    </div>

    @if ($showUploadForm)
        <form wire:submit.prevent="save" class="mt-4">
            <input type="file" wire:model="profilePicture">
            @error('profilePicture') <span class="error">{{ $message }}</span> @enderror
            <button type="submit" class="bg-green-500 text-white py-2 px-4 ">Save</button>
        </form>
    @endif
</div>