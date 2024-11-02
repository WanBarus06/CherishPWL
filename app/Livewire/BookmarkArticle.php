<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\Bookmark;
use Livewire\Component;

class BookmarkArticle extends Component
{
    public $articleId;
    public $isBookmarked = false;

    public function mount($article)
    {
        $this->articleId = $article->id;
        $this->isBookmarked = $this->checkIfBookmarked();
    }

    public function toggleSave()
    {
        if ($this->isBookmarked) {
            // Hapus bookmark
            Bookmark::where('user_id', Auth::id())->where('article_id', $this->articleId)->delete();
            $this->isBookmarked = false;
        } else {
            // Simpan bookmark
            Bookmark::create([
                'user_id' => Auth::id(),
                'article_id' => $this->articleId
            ]);
            $this->isBookmarked = true;
        }
    }

    private function checkIfBookmarked()
    {
        return Bookmark::where('user_id', Auth::id())->where('article_id', $this->articleId)->exists();
    }

    public function render()
    {
        return view('livewire.bookmark-article');
    }
}
