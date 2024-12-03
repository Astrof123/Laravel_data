<?php

namespace App\Http\Controllers;
use App\Models\Quote;
use App\Models\Author;

use Illuminate\Http\Request;

class QuoteController extends Controller {
    public function index()
    {
        $quotes = Quote::with('author')->get();
        
        return view('quotes.index', compact('quotes'));
    }

    public function create() {
        $quote = new Quote;
        $authors = Author::select('id', 'fullname')->get();
        
        return view('quotes.create', compact("quote", "authors"));
    }

    public function store(Request $request) {
        $request->validate([
            'phrase' => 'required|max:124',
            'author_id' => 'required'
        ]);


        $author = Quote::create($request->all());

        return redirect()->route('index_quote');
    }

    
    public function edit(Quote $quote)
    {
        $authors = Author::select('id', 'fullname')->get();
        return view('quotes.edit', compact("quote", "authors"));
    }


    public function update(Request $request, Quote $quote)
    {
        $request->validate([
            'phrase' => 'required|max:124',
            'author_id' => 'required'
        ]);



        $quote = $quote->update($request->all());

        return redirect()->route('index_quote');
    }


    public function destroy(Quote $quote)
    {
        $quote->delete();

        return redirect()->route('index_quote');
    }
}
