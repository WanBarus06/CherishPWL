<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class RandomArticle extends Component
{
    public $perPage = 3;
    public $excludeSlug;

    public function mount($slug = null)
    {
        $this->excludeSlug = $slug;
    }

    public function loadMore()
    {
        $this->perPage += 3;
    }

    public function render()
    {
        // Query to fetch random articles, excluding the specified slug if provided

        if (!empty($this->excludeSlug)) {
            $randomArticles = Article::where('slug', '!=', $this->excludeSlug)
            ->paginate($this->perPage);
            $totalArticles = Article::count() - 1;
        } else {
            $randomArticles = Article::paginate($this->perPage);
            $totalArticles = Article::count() - 4;
        }
        

       
        $enoughArticles = $this->perPage < $totalArticles;

        return view('livewire.random-article', compact('randomArticles', 'enoughArticles'));
    }
}

