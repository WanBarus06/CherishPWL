<div class="flex items-center text-lg border-gray-300 md:hidden sm:hidden lg:block pb-12 w-full relative">
    <input wire:model.live="search" type="text" id="searchInput" placeholder="Search title news" class="py-2 px-2 border w-4/6 border-gray-300 rounded-l-md focus:outline-none focus:ring focus:border-blue-100">
    <button id="searchButton" class="w-28 h-10 border border-gray-300 border-b border-t text-xl text-gray-500  px-4  rounded-r-md focus:ring">Search</button>
    @if(sizeof($articles) > 0)
    <div id="searchSuggestions" class="absolute left-0 mt-1 w-full bg-white border border-gray-300 rounded-md shadow-lg">
        <!-- Suggestions will be displayed here -->
        <div class="py-1">
            @foreach ($articles as $article)
            <a href="/news/{{ $article->slug }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ $article->title }}</a>
            @endforeach
        </div>
    </div>
    @endif
</div>    
