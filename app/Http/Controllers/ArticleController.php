<?php

namespace App\Http\Controllers;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(){
        $articles = Article::inRandomOrder()->limit(4)->get();
        $bookmarkedArticles = Bookmark::where('user_id', Auth::id())->with('article')->get();
        return view('index-article', ['articles' => $articles, 'bookmarkedArticles' => $bookmarkedArticles]);
    }

    public function showArticle($slug) {
        $article = Article::where('slug', $slug)->first();
        $bookmarkedArticles = Bookmark::where('user_id', Auth::id())->with('article')->get();
        return view('index-single-article', ['article' => $article], ['bookmarkedArticles' => $bookmarkedArticles]);
    }

    public function showUserArticle(){
        $articles = Article::inRandomOrder()->limit(4)->get();
        return view('index-article', ['articles' => $articles]);
    }

    public function showUserSingleArticle($slug){
        $article = Article::where('slug', $slug)->first();
        return view('index-single-article', ['article' => $article]);
    }
    
    public function homepage(){
        $articles = Article::inRandomOrder()->limit(4)->get();
        return view('index-homepage', ['articles' => $articles]);
    }

    
}
