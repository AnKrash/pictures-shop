@extends('layouts.app')
@section('title-block') {{$dataP->name}} @endsection

@section('content')
    <h1>{{$dataP->name}}</h1>

    <div class="alert alert-info">
        <p>{{$dataP->description}}</p>
        <p>{{$dataP->image}}</p>
        <p><small>{{$dataP->created_at}}</small></p>
        <p><small>{{$dataP->price}}</small></p>
    </div>

@endsection
