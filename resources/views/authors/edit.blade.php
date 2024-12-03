@extends('layout')

@section('title', 'Создание автора')

@section('content')
<div class='root_form'>
    @if(session('status'))
        <div class="message">
            {{session('status')}}
        </div>
    @endif


    <form method="POST" action="{{ route('update_author', $author->id) }}">
        @csrf()

        <h1>Редактирование автора</h1>

        <label class="titleInputText">
            Полное имя:<br>
            <input type="text" name="fullname" id="" value="{{ old('fullname') ?? $author->fullname }}">
        </label>
        @error('fullname')
            <div class="error" style="color: red;">{{ "Введите имя" }}</div>
        @enderror


        <label class="titleInputText">
            Ссылка на фото:<br>
            <input type="text" name="photo_url" id="" value="{{ old('photo') ?? $author->photo_url }}">
        </label>

        <button type="submit">Обновить</button>
    </form>
    <form method="POST" action="{{ route('delete_author', $author->id) }}">
        @method('DELETE')
        @csrf()


        <button type="submit" class="delete_button" style="background-color:firebrick;">Удалить</button>
    </form>
</div>
    
@endsection