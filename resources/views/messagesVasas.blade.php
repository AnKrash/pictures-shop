@extends('layouts.app')
@section('title-block')Все Вазы @endsection

@section('content')
    <h1>Все Вазы</h1>

    @foreach($dataV as $el)
        <div class="alert alert-info">
            <h3>{{$el->name}}</h3>
            <p>{{$el->description}}</p>
            <p>{{$el->image}}</p>
            <p>{{$el->price}}</p>
            <a href="{{route('one-message-vase', $el->id)}}" class="btn btn-success">Детальнее</a>
        </div>
    @endforeach

@endsection
