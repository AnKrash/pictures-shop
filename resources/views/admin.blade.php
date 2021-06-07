@extends('layouts.app')

@section('title-block')Админ@endsection
@section('content')
    <h1>Страница Админа</h1>
    <br>

    <a href="{{route('bdpictures')}}" ><h2>Data base</h2>  </a>
    <a href="{{route('adminOrders')}}" ><h2>Orders</h2>  </a>


@endsection
