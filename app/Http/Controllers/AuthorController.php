<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::select('id', 'fullname', 'photo_url')->get();
        
        return view('authors.index', compact('authors'));
    }

    public function create() {
        $author = new Author;
        return view('authors.create', compact("author"));
    }

    public function store(Request $request) {
        $request->validate([
            'fullname' => 'required|max:50'
        ]);


        $author = Author::create($request->all());

        return redirect()->route('index_author');
    }

    
    public function edit(Author $author)
    {
        return view('authors.edit', compact("author"));
    }


    public function update(Request $request, Author $author)
    {
        $request->validate([
            'fullname' => 'required|max:50'
        ]);


        $author = $author->update($request->all());

        return redirect()->route('index_author');
    }


    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('index_author');
    }
}
