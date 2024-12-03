@extends('layout')

@section('title', 'Главная')

@section('content')
    <div class="quotes_wrapper">
        <h1>Коллекция цитат величайших людей</h1>

        <div class="quotes">
            @foreach($quotes as $quote)
                <a href="{{ route('edit_quote', $quote->id) }}">
                    <div class="quotes_block" style="background-color:{{$quote->color_card}};">
                        <div class="quote_text_block">
                            <div class="quote_text_phrase_wrapper">
                                <span class="quote_text_phrase"><i>{{ $quote->phrase }}</i></span>
                            </div>
                            <span class="quote_text_author">-- {{ $quote->author->fullname }} --</span>
                            <span class="quote_text_author">{{ $quote->year }}</span>
                        </div>
                        
                        <div class=quote_image_block>
                            <img class="quote_image" src="{{ $quote->author->photo_url ?? "https://lastfm.freetls.fastly.net/i/u/ar0/78c672cdedd9edb3b1255ccb19fb887d.jpg" }}" alt="Author">
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection