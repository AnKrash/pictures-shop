@extends('layouts.app')
@section('title-block')pictures @endsection

@section('content')
    <h1>You are in Admin Orders Base</h1>
    <table>
        <thead>
        <th></th>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr class="alert alert-info">
                <td>Customer:{{$order->name}}</td>
                <p>Customer:{{$order->surname}}</p>
                <p>Customer:{{$order->created_at}}</p>
                <a class="btn btn-primary" href="#">Details</a>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p></p>
@endsection
