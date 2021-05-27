@extends('layouts.app')
@section('title-block')Скульптуры @endsection

@section('content')
    <h1>Скульптуры</h1>
    <div class="row">
    @foreach($data as $el)

        <div class="alert alert-info col-6">

            <h3>{{$el->name}}</h3>
            <p>{{$el->description}}</p>
            <p>{{$el->image}}</p>
            <p>{{$el->price}}</p>
            <p><small> {{$el->created_at}}</small></p>
            <a href="{{route('one-message-picture', $el->id)}}" class="btn btn-success">Детальнее</a>


        </div>

    @endforeach
    </div>
@endsection
