@extends('layout')

@section('title', 'Главная')

@section('content')
    <div class="authors_wrapper">
        <h1>Зал авторов цитат:</h1>


        <div class="authors">
            
            @foreach($authors as $author) 
                <a href="{{ route('edit_author', $author->id) }}">
                    <div class="author_block">
                        <span class="author_fullname">-- {{ $author->fullname }} --</span>
                        <img class="author_photo" src="{{ $author->photo_url ?? "https://lastfm.freetls.fastly.net/i/u/ar0/78c672cdedd9edb3b1255ccb19fb887d.jpg" }}" alt="">
                    </div>
                </a>

            @endforeach
        </div>
    </div>
@endsection