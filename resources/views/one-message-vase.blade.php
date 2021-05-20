@extends('layouts.app')
@section('title-block') {{$dataV->name}} @endsection

@section('content')
    <h1>{{$dataV->name}}</h1>

    <div class="alert alert-info">
        <p>{{$dataV->description}}</p>
        <p>{{$dataV->image}}</p>
        <p><small>{{$dataV->created_at}}</small></p>
        <p><small>{{$dataV->price}}</small></p>
    </div>

@endsection
