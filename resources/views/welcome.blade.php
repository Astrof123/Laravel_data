@extends('layout')

@section('title', 'Главная')

@section('content')
    <div class="quotes_wrapper">
        <h1>Коллекция цитат величайших людей</h1>

        <div class="quotes">
            <a href="">
                <div class="quotes_block" style="background-color:aliceblue;">
                    <div class="quote_text_block">
                        <div class="quote_text_phrase_wrapper">
                            <span class="quote_text_phrase"><i>Жизнь это как колодец, там ведро что-то... и вода...</i></span>
                        </div>
                        <span class="quote_text_author">-- Жак Фреско --</span>
                    </div>
                    
                    <div class=quote_image_block>
                        <img class="quote_image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Jacque_Fresco_and_lemon_tree_%28cropped%29.jpg/640px-Jacque_Fresco_and_lemon_tree_%28cropped%29.jpg" alt="Author">
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection