@extends('layouts.account')

@section('title', 'Article Saved')

@section('content')
<div class="p-4 sm:ml-64 bg-white">
    <div class="p-4 rounded-lg mt-14">
        <h2 class="text-3xl font-semibold text-black mb-8">Article Saved</h2>
        <div class="grid sm:grid-cols-1 grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
            @foreach($bookmarkedArticles as $bookmark)
            <a href="/news/{{ $bookmark->article->slug }}" class="text-black">
                <div class="block p-4 border border-gray-300 rounded-lg hover:bg-gray-100">
                    <img src="{{ $bookmark->article->image }}" alt="Article Image" class="w-full h-32 sm:h-48 object-cover mb-4 rounded-lg">
                    <h2 class="text-xl sm:text-2xl font-semibold text-black mb-2">{{ $bookmark->article->title }}</h2>
                    <p class="text-black mb-4">{{ $bookmark->article->excerpt }}</p>
                    <div class="flex justify-end">
                        <form action="{{ route('bookmark.destroy', $bookmark->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-red-500 hover:bg-red-600 rounded-full focus:ring-4 focus:ring-red-300 font-medium px-4 py-2 focus:outline-none">
                                Remove Article
                            </button>
                        </form>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
