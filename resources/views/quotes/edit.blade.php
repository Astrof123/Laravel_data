@extends('layout')

@section('title', 'Редактирование цитаты')

@section('content')
<div class='root_form'>
    @if(session('status'))
        <div class="message">
            {{session('status')}}
        </div>
    @endif


    <form method="POST" action="{{ route('update_quote', $quote->id) }}">
        @csrf()

        <h1>Редактирование цитаты</h1>

        <label class="titleInputText">
            Фраза:<br>
            <input type="text" name="phrase" id="" value="{{ old('phrase') ?? $quote->phrase }}">
        </label>
        @error('phrase')
            <div class="error" style="color: red;">{{ "Введите фразу" }}</div>
        @enderror


        <label class="titleInputText">
            Год появления:<br>
            <input type="text" name="year" id="" value="{{ old('year') ?? $quote->year }}">
        </label>


        <label class="titleInputText">
           Цвет карточки:<br>
            <input type="color" name="color_card" id="" value="{{ old('color') ?? $quote->color_card }}">
        </label>

        <label class="titleInputText">
            Автор:<br>
            <select name="author_id">
                @foreach($authors as $author) 
                    @if (old('author'))
                        <option value="{{ $author->id }}" {{ old('author') == " $author->fullname " ? "selected" : ""}}>{{ $author->fullname }}</option>
                    @else
                        <option value="{{ $author->id }}" {{ $quote->author->fullname == " $author->fullname " ? "selected" : ""}}>{{ $author->fullname }}</option>
                    @endif
                    
                @endforeach
            </select>
        </label>
        @error('author_id')
            <div class="error" style="color: red;">{{ "Выберите автора" }}</div>
        @enderror

        <button type="submit">Обновить</button>
    </form>
    <form method="POST" action="{{ route('delete_quote', $quote->id) }}">
        @method('DELETE')
        @csrf()


        <button type="submit" class="delete_button" style="background-color:firebrick;">Удалить</button>
    </form>
</div>
    
@endsection