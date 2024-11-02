<?php

namespace App\Http\Controllers;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function render(){

    $bookmarkedArticles = Bookmark::where('user_id', Auth::id())->with('article')->get();
    return view('user-saved-article', compact('bookmarkedArticles'));
    }

    public function destroy($id)
    {
        $bookmark = Bookmark::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $bookmark->delete();

        return redirect()->back();
    }

}


