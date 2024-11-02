<div>
    @foreach($randomArticles as $randomArticle)
    <div class="flex items-center justify-between">
      <div class="flex items-center">
        <a href="/news/{{ $randomArticle->slug }}">
        <div>
          <h2 class="text-xl font-semibold">{{ $randomArticle->title }}</h2>
          <p class="text-md text-gray-500">{!! $randomArticle->excerpt !!}</p>
          <p class="text-sm text-gray-500 pt-4">Amaryllis - {{ $randomArticle->updated_at->diffForHumans() }}</p>
        </div>
      </div>
      <div class="ml-0 pr-3 pt-8">
        <img src="{{ $randomArticle->image }}" alt="Image" class="w-28 h-32 rounded-lg">
      </div>
    </a>
    </div>
    @endforeach
    @if($enoughArticles)
    <div class="flex justify-center mt-8">
        <button wire:click="loadMore" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full flex items-center">
        Read more
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.707 13.293a1 1 0 0 1-1.414 0L5.586 9.414A1 1 0 1 1 6.999 7.999L10 10.999l3.414-3.414a1 1 0 1 1 1.414 1.414l-4.001 4a1 1 0 0 1 0 1.414z" clip-rule="evenodd" />
        </svg>
    </button>
    </div>
    @endif
</div>
