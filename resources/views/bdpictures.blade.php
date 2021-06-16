@extends('layouts.app')
@section('title-block')pictures @endsection

@section('content')
    <h1>Вы в базе данных PICTURES</h1>
    <p></p>


    <form action={{route('form-pictures')}} method="post">
        @csrf

        <div class="form-group">
            <label for="name"> name</label>
            <input type="text" name="name" placeholder="Введите название товара" id="name"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="code"> code </label>
            <input type="text" name="code"
                   placeholder="Код 1-Современное искусство, Код 2-Классическое, Код 3-Скульптуры" id="code"
                   class="form-control">
        </div>
      <!--  <div class="dropdown-menu">
            <h6 class="dropdown-header">Dropdown header</h6>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
        </div>
        <div class="dropdown open">
            <a class="btn btn-secondary dropdown-toggle"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Choose the class
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        -->
        <div class="form-group">
            <label for="message"> description</label>
            <textarea name="message" id="message" placeholder="Введите описание товара"
                      class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="image"> image</label>
            <input type="text" name="image" placeholder="Картинка" id="image"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="price"> price</label>
            <input type="text" name="price" placeholder="Введите цену" id="price"
                   class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Внести в базу</button>
    </form>
@endsection
