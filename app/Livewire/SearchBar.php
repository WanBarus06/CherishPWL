<?php

namespace App\Livewire;
use App\Models\Article;
use Livewire\Component;

class SearchBar extends Component
{
    public $search;
    public function render()
    {
        $result = [];

        if(strlen($this->search) >= 1){
            $result = Article::where('title', 'like', '%' . $this->search . '%')->limit(4)->get();
        }
        return view('livewire.search-bar',[
            'articles' => $result
        ]);
    }
}
