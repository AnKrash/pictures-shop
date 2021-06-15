@extends('layouts.app')
@section('title-block')pictures @endsection

@section('content')
    <h1>You are in Admin Orders Base</h1>
    <h2>Orders:</h2>
    <table>
        <thead>
        <th>ORDERS</th>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr class="">
                <td></td>
                <p>Customer:{{$order->name}}</p>
                <p>Created at:{{$order->created_at}}</p>
                <a class="btn btn-primary" href="{{route('admin_order.show',$order->id)}}">Details</a>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p></p>
@endsection
