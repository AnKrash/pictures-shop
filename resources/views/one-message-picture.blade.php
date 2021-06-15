@extends('layouts.app')
@section('title-block') {{$product->name}} @endsection

@section('content')
    <h1>Name:{{$product->name}}</h1>

    <div class="alert alert-info">
        <p>Description:{{$product->description}}</p>
         <img src="img/{{$product->image}}" alt="picture">
        <p><small>Created at:{{$product->created_at}}</small></p>
        <p><small>Price:{{$product->price}}</small></p>
        <form action="{{ route('basket.add', ['id' => $product->id]) }}"
              method="post" class="form-inline">

            <label for="input-quantity">Количество</label>
            <input type="text" name="quantity" id="input-quantity" value="1"
                   class="form-control mx-2 w-25">
            <button type="submit" class="btn btn-success">Добавить в корзину</button>
            @csrf
        </form>
    </div>

@endsection
