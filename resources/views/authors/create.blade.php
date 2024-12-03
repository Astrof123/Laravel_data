@extends('layout')

@section('title', 'Создание автора')

@section('content')
<div class='root_form'>
    @if(session('status'))
        <div class="message">
            {{session('status')}}
        </div>
    @endif


    <form method="POST" action="{{ route('store_author') }}">
        @csrf()

        <h1>Добавление автора</h1>

        <label class="titleInputText">
            Полное имя:<br>
            <input type="text" name="fullname" id="" value="{{ old('fullname') }}">
        </label>
        @error('fullname')
            <div class="error" style="color: red;">{{ "Введите имя" }}</div>
        @enderror


        <label class="titleInputText">
            Ссылка на фото:<br>
            <input type="text" name="photo_url" id="" value="{{ old('photo') }}">
        </label>

        <button type="submit">Создать</button>
    </form>
</div>
    
@endsection