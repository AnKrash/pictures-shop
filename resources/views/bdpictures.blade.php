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
