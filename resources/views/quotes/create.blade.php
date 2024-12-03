@extends('layout')

@section('title', 'Создание цитаты')

@section('content')
<div class='root_form'>
    @if(session('status'))
        <div class="message">
            {{session('status')}}
        </div>
    @endif


    <form method="POST" action="{{ route('store_quote') }}">
        @csrf()

        <h1>Добавление цитаты</h1>

        <label class="titleInputText">
            Фраза:<br>
            <input type="text" name="phrase" id="" value="{{ old('phrase') }}">
        </label>
        @error('phrase')
            <div class="error" style="color: red;">{{ "Введите фразу" }}</div>
        @enderror


        <label class="titleInputText">
            Год появления:<br>
            <input type="text" name="year" id="" value="{{ old('year') }}">
        </label>


        <label class="titleInputText">
           Цвет карточки:<br>
            <input type="color" name="color_card" id="" value="{{ old('color') }}">
        </label>

        <label class="titleInputText">
            Автор:<br>
            <select name="author_id">
                @foreach($authors as $author) 
                    <option value="{{ $author->id }}" {{ old('author') == " $author->fullname " ? "selected" : ""}}>{{ $author->fullname }}</option>
                @endforeach
            </select>
        </label>
        @error('author')
            <div class="error" style="color: red;">{{ "Выберите автора" }}</div>
        @enderror

        <button type="submit">Создать</button>
    </form>
</div>
    
@endsection