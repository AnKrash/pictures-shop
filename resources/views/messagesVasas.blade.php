@extends('layouts.app')
@section('title-block') Современное искусство @endsection

@section('content')
    <h1>Современное искусство </h1>



    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{$el->name}}</h3>
            <p>{{$el->description}}</p>
            <p> <img src="img/{{$el->image}}" alt="picture"> </p>
            <p>{{$el->price}}</p>
            <a href="{{route('one-message-picture', $el->id)}}" class="btn btn-success">Детальнее</a>
        </div>
    @endforeach

@endsection
