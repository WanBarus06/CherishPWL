@extends('layouts.admin')
@section('title', 'Update')
@section('content')
        <div class="bg-white p-4 sm:ml-64 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Update Article</h2>
            <form action="{{ route('article.update', $article->id) }}" method="post" class="space-y-4" enctype="multipart/form-data">
                <!-- Article fields -->
                @csrf
                @method('PUT')
                <input type="text" name="title" placeholder="Title" value="{{ old('title', $article->title) }}"  class="px-4 py-2 border rounded-lg text-gray-700 w-full">
                <x-forms.tinymce-editor :value="$article->body"/>
                <input type="file" name="image" placeholder="Image URL"  class="px-4 py-2 border rounded-lg text-gray-700 mb-4 w-full">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Update</button>
            </form>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
@endsection
