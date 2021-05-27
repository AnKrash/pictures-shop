@extends('layouts.app')
@section('title-block')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <h3><a href="{{route('allDataPictures')}}">Классические Картины</a></h3>
    <h3><a href="{{route('allDataLamps')}}">Скульптуры</a></h3>
    <h3><a href="{{route('allDataVase')}}">Современное искусство</a></h3>

@endsection
@section('aside')
@parent
    <p>Дополнительный текст</p>
    <button class="btn btn-primary">trer</button>
@endsection
