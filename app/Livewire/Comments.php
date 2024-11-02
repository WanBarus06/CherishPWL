<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Comments extends Component
{
    use WithPagination;

    public $article;
    public $newComment = "";
    public $newReply;
    public $parentCommentId;
    public $replyFormVisible = false;
    public $replyingTo = null;
    public $loadCount = 5;

    protected $rules = [
        'newComment' => 'required|min:1',
        'newReply' => 'required|max:255'
    ];

    public function mount(Article $article)
    {
        $this->article = $article;
    }

    public function loadMore()
    {
        $this->loadCount += 5;
    }
    public function postReply($commentId)
    {
        $this->validate(['newReply' => 'required|max:255']);
        Comment::create([
            'user_id' => auth()->id(),
            'body' => $this->newReply,
            'article_id' => $this->article->id,
            'parent_id' => $commentId,
        ]);
        $this->newReply = '';
        $this->replyFormVisible = false;
        $this->replyingTo = null;
        $this->article->refresh(); // Refresh comments
    }

    public function addComment()
    {
        $this->validate(['newComment' => 'required|min:1']);

        Comment::create([
            'user_id' => Auth::id(),
            'article_id' => $this->article->id,
            'body' => $this->newComment,
            'parent_id' => $this->parentCommentId,
        ]);
        $this->newComment = "";
        $this->parentCommentId = null;
        $this->article->refresh();
    }

    public function showReplyForm($commentId)
    {
        $this->replyFormVisible = true;
        $this->replyingTo = $commentId;
    }

    public function render()
    {
        return view('livewire.comments', [
            'comments' => Comment::where('article_id', $this->article->id)
                ->whereNull('parent_id')
                ->with('replies')
                ->latest()
                ->paginate($this->loadCount),
        ]);
    }
}
