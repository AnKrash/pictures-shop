@extends('layouts.app')

@section('title-block')Админ@endsection
@section('content')
    <h1>Страница Админа</h1>
    <h1>Войдите в базу данных</h1>
    <a href="{{route('bdvase')}}" ><h2>Вазы</h2>  </a>
    <a href="{{route('bdpictures')}}" ><h2>Картины</h2>  </a>
    <a href="{{route('bdaccess')}}" ><h2>Аксессуары</h2>  </a>


@endsection
