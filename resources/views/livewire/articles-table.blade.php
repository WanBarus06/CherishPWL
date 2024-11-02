<div class="bg-white p-4 sm:ml-64 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-700 mb-6">Articles Data</h2>
    <!-- Search input -->
    <div class="mb-4">
        <input wire:model.live.debounce.300ms="search" type="text" placeholder="Search for title or excerpt" class="px-4 py-2 border rounded-lg text-gray-700 w-full">
    </div>
    @if (session('success'))
    <div id="alert-additional-content-3" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 text-green-800 border border-green-300 rounded-lg bg-green-200 z-50" role="alert">
      <div class="flex items-center">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>    
        <h3 class="text-lg font-medium">{{ session('success') }}</h3>
      </div>
      <div class="mt-2 mb-4 text-sm">
        You have successfully updated this article.
      </div>
      <div class="flex justify-center">
        <button type="button" class="text-green-800 bg-transparent border border-green-800 hover:bg-green-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-green-600 dark:border-green-600 dark:text-green-400 dark:hover:text-white dark:focus:ring-green-800" data-dismiss-target="#alert-additional-content-3" aria-label="Close">
          Okay
        </button>
      </div>
    </div>
    @elseif (session('success_deleted'))
    <div id="alert-additional-content-3" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 text-green-800 border border-green-300 rounded-lg bg-green-200 z-50" role="alert">
        <div class="flex items-center">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>    
          <h3 class="text-lg font-medium">{{ session('success_deleted') }}</h3>
        </div>
        <div class="mt-2 mb-4 text-sm">
          You have successfully deleted this article.
        </div>
        <div class="flex justify-center">
          <button type="button" class="text-green-800 bg-transparent border border-green-800 hover:bg-green-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-green-600 dark:border-green-600 dark:text-green-400 dark:hover:text-white dark:focus:ring-green-800" data-dismiss-target="#alert-additional-content-3" aria-label="Close">
            Okay
          </button>
        </div>
      </div>
    @endif
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Excerpt</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date Created</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date Updated</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Update</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Delete</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table rows will be dynamically populated with data from your database -->
            
            @foreach($articles as $article)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $article->id }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $article->title }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $article->excerpt }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $article->created_at }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $article->updated_at }}</td>
                <td class="px-6 py-4 whitespace-no-wrap"><a href="{{ route('article.edit', $article->id) }}" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Update</a></td>
                <td class="px-6 py-6 whitespace-no-wrap">
                    <form action="{{ route('article.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white   py-1 px-3 rounded">Delete</button>
                    </form>
                </td>
            </tr>
            </tr>
            @endforeach
            <!-- Add more rows for additional users -->
        </tbody>
    </table>
    <!-- Pagination -->
    <div class="text-white dark:text-white">
    {{ $articles->links() }}
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>