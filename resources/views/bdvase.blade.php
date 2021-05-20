@extends('layouts.app')
@section('title-block')vases @endsection

@section('content')
    <h1>Вы в базе данных VASES</h1>


    <form action={{route('admin-form-bdvase')}} method="post">
        @csrf

        <div class="form-group">
            <label for="name"> name</label>
            <input type="text" name="name"  placeholder="Введите название товара" id="name"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="code"> code </label>
            <input type="text" name="code" placeholder="Введите код товара" id="code"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="message"> description</label>
            <textarea name="message" id="message" placeholder="Введите описание товара"
                      class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="image"> image</label>
            <input type="text" name="image"  placeholder="Картинка" id="image"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="price"> price</label>
            <input type="text" name="price"  placeholder="Введите цену" id="price"
                   class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Внести в базу</button>
    </form>
@endsection
