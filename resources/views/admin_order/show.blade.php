@extends('layouts.app')
@section('title-block')pictures @endsection

@section('content')

    <h2>Orders details:</h2>
    <h1>{{$order->name}}</h1>

    <div>
        <p>{{$order->name}}</p>
        <p>{{$order->description}}</p>
        <p>Email:{{$order->email}}</p>
        <p>Phone:{{$order->phone}}</p>
        <p>Address:{{$order->address}}</p>
        <p>Comment:{{$order->comment}}</p>

        <p></p>
        @foreach($order->pictures as $p)
            <p>Picture:{{$name=$p->name}}<p/>
            <p>Quantity: {{$quantity = $p->pivot->quantity}}</p>
            <p>Price:{{$price=$p->price}}</p>
        @endforeach

        <a href="{{route('contact-update',$order->id)}}">
            <button class="button button-primary">
                Редактировать
            </button>
        </a>
        <a href="{{route('contact-delete',$order->id)}}">
            <button class="button button-danger">
                Удалить
            </button>
        </a>

    </div>
@endsection
