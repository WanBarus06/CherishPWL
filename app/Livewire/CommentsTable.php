<?php

namespace App\Livewire;
use App\Models\Comment;
use Livewire\Component;

class CommentsTable extends Component
{

    public $search = "";

    public function render()
    {
        $comments = Comment::search($this->search)->paginate(10);
        return view('livewire.comments-table', compact('comments'));
    }
}
