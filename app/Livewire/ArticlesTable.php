<?php

namespace App\Livewire;
use App\Models\Article;
use Livewire\Component;

class ArticlesTable extends Component
{
    public $search = "";
    public function render()
    {
        $articles = Article::search($this->search)->paginate(10);
       
        return view('livewire.articles-table', compact('articles'));
    }
}
