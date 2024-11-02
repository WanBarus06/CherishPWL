<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ArticlesCRUD extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check() && auth()->user()->hasVerifiedEmail() && auth()->user()->user_role === 'admin') {
            return view('article');
        }
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as needed
        ]);
        
        $body = strip_tags($request->body);
        $excerpt = implode(' ', array_slice(str_word_count($body, 1), 0, 10));
        $slug = Str::slug($request->title, '-');

        $articleData = [
            'title' => $request->title,
            'body' => $request->body,
            'excerpt' => $excerpt,
            'slug' => $slug,
        ];

        if ($request->hasFile('image')) {
            // Get the file from the request
            $file = $request->file('image');
            // Define the path where the image will be stored
            $destinationPath = public_path('/images');
            // Define the file name
            $fileName = time() . '-' . $file->getClientOriginalName();
            // Move the file to the destination path
            $file->move($destinationPath, $fileName);
            // Store the path in the database
            $articleData['image'] = '../images/' . $fileName;
        }

        Article::create($articleData);

        return redirect()->route('article.index')->with('success', 'Article created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        if (auth()->check() && auth()->user()->hasVerifiedEmail() && auth()->user()->user_role === 'admin') {
            return view('update', compact('article'));
        }
        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as needed
        ]);
    
        $body = strip_tags($request->body);
        $excerpt = implode(' ', array_slice(str_word_count($body, 1), 0, 10));
        $slug = Str::slug($request->title, '-');
    
        $articleData = [
            'title' => $request->title,
            'body' => $request->body,
            'excerpt' => $excerpt,
            'slug' => $slug,
        ];

        if ($request->hasFile('image')) {
            // Get the file from the request
            $file = $request->file('image');
            // Define the path where the image will be stored
            $destinationPath = public_path('/images');
            // Define the file name
            $fileName = time() . '-' . $file->getClientOriginalName();
            // Move the file to the destination path
            $file->move($destinationPath, $fileName);
            // Store the path in the database
            $articleData['image'] = '../images/' . $fileName;
        }
    
        $article->update($articleData);
    
        return redirect()->route('article.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {   
        $article->delete();

        return redirect()->route('article.index')
                         ->with('success_deleted', 'Article deleted successfully');
    }
}
