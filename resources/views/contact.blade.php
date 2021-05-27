
@extends('layouts.app')
@section('title-block')Страница Контактов@endsection

@section('content')
    <h1>Страница Контактов</h1>

    <form action={{route('contact-form')}} method="post">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name"  placeholder="Введите имя" id="name"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Введите email </label>
            <input type="text" name="email" placeholder="Введите email" id="email"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Тема сообщения</label>
            <input type="text" name="subject"  placeholder="Subject" id="subject"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Cообщение</label>
            <textarea name="message" id="message" placeholder="Введите сообщение"
                      class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection
