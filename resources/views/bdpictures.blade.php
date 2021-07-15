@extends('layouts.app')
@section('title-block')pictures @endsection

@section('content')
    <h1>Вы в базе данных PICTURES</h1>
    <p></p>

    <form action={{route('form-pictures')}} method="post">
        @csrf

        <div class="form-group">
            <label for="name"> name</label>
            <input type="text" name="name" placeholder="Input items name" id="name"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="code"> code </label>
            <input type="text" name="code"
                   placeholder="Code 1-Modern art, Code 2-Classic, Code 3-Sculpture" id="code"
                   class="form-control">
        </div>

        <div class="form-group">
            <label for="message"> description</label>
            <textarea name="message" id="message" placeholder="Input items description"
                      class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="image"> image</label>
            <input type="text" name="image" placeholder="Image" id="image"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="price"> price</label>
            <input type="text" name="price" placeholder="Input price" id="price"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="price"> quantity</label>
            <input type="text" name="quantity" placeholder="Input Quantity" id="price"
                   class="form-control">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Внести в базу</button>
    </form>
@endsection
