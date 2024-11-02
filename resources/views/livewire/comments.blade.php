<div>
    @if (Route::has('login'))
        @auth
            @if (auth()->user()->hasVerifiedEmail())
                <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                    <h2 class="text-2xl font-semibold mb-4">Comments</h2>

                    <!-- Form untuk menambahkan komentar -->
                    <div class="mb-6">
                        <form wire:submit.prevent="addComment" class="mb-6">
                            <textarea wire:model="newComment" value="" rows="3"  class="w-full p-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Add a comment..."></textarea>
                            <button class="bg-green-600 inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center rounded-2xl border mt-5  text-white focus:outline-0  focus:ring-4 focus:ring-green-100 hover:bg-green-500">Add Comment</button>
                        </form>
                    </div>

                    <!-- Daftar komentar -->
                    <div class="space-y-6">
                        @foreach($comments as $comment)
                        <div class="flex items-start space-x-4">
                            <img src="{{ Storage::url($comment->user->profile_picture) }}" alt="{{ $comment->user->name }}" class="w-10 h-10 rounded-full">
                            <div class="flex-1">
                                <div class="bg-gray-100 p-4 rounded-lg">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg font-semibold">{{ $comment->user->first_name }}</h3>
                                        <span class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p class="mt-2 text-gray-700">{{ $comment->body }}</p>
                                </div>
                                <!-- Tombol balas -->
                                <button wire:click="showReplyForm({{ $comment->id }})" class="mt-2 text-sm text-blue-500 hover:underline">Reply</button>

                                <!-- Form balasan -->
                                @if($replyFormVisible && $replyingTo == $comment->id)
                                <div class="mt-4">
                                    <textarea wire:model="newReply" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="2" placeholder="Add a reply..."></textarea>
                                    <button wire:click="postReply({{ $comment->id }})" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Reply</button>
                                </div>
                                @endif

                                <!-- Daftar balasan -->
                                @if($comment->replies)
                                <div class="mt-4 space-y-4">
                                    @foreach($comment->replies as $reply)
                                    <div class="flex items-start space-x-4 ml-10">
                                        <img src="{{ Storage::url($reply->user->profile_picture) }}" alt="{{ $reply->user->name }}" class="w-8 h-8 rounded-full">
                                        <div class="flex-1">
                                            <div class="bg-gray-100 p-4 rounded-lg">
                                                <div class="flex items-center justify-between">
                                                    <h3 class="text-lg font-semibold">{{ $reply->user->first_name }}</h3>
                                                    <span class="text-sm text-gray-500">{{ $reply->created_at->diffForHumans() }}</span>
                                                </div>
                                                <p class="mt-2 text-gray-700">{{ $reply->body }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Tombol Load More Comments -->
                    @if($comments->hasMorePages())
                    <div class="text-center mt-4">
                        <button wire:click="loadMore" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Load More Comments</button>
                    </div>
                    @endif
                </div>
            @endif
        @else
            <div class="mb-6">
                <h4 class="text-gray-700 pt-5 font-semibold text-base pb-10">You can't view comments yet. Please login first.</h4>
                <a href="{{ route('login') }}" class="text-white rounded-full hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">Login</a>
            </div>
        @endauth
    @endif
</div>
