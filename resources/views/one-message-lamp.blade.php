@extends('layouts.app')
@section('title-block') {{$dataL->name}} @endsection

@section('content')
    <h1>{{$dataL->name}}</h1>

    <div class="alert alert-info">
        <p>{{$dataL->description}}</p>
        <p>{{$dataL->image}}</p>
        <p><small>{{$dataL->created_at}}</small></p>
        <p><small>{{$dataL->price}}</small></p>
    </div>

@endsection
