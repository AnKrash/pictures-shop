@extends('layouts.app')
@section('title-block')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <h3><a href="{{route('allDataPictures')}}">Картины</a></h3>
    <h3><a href="{{route('allDataLamps')}}">Светильники</a></h3>
    <h3><a href="{{route('allDataVase')}}">Вазы</a></h3>

@endsection
@section('aside')
@parent
    <p>Дополнительный текст</p>
    <button class="btn btn-primary">trer</button>
@endsection
