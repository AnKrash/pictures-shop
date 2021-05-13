@extends('layouts.app')
@section('title-block')Обновление записи@endsection

@section('content')
    <h1>Обновление записи</h1>

    <form action="{{ route('contact-update-submit',$data1->id) }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" value="{{$data1->name}}" placeholder="Введите имя" id="name"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Введите email </label>
            <input type="text" name="email" value="{{$data1->email}}" placeholder="Введите email" id="email"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Тема сообщения</label>
            <input type="text" name="subject" value="{{$data1->subject}}" placeholder="Subject" id="subject"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Cообщение</label>
            <textarea name="message" id="message" placeholder="Введите сообщение"
                      class="form-control">{{$data1->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection


