@extends('layouts.app')
@section('title-block')Классические картины @endsection

@section('content')
    <h1>Классические картины</h1>

@foreach($data as $el)
<div class="alert alert-info">
    <h3>{{$el->name}}</h3>
    <p>{{$el->description}}</p>
    <p>{{$el->image}}</p>
    <p>{{$el->price}}</p>
    <a href="{{route('one-message-picture', $el->id)}}" class="btn btn-success">Детальнее</a>
</div>
    @endforeach

@endsection


