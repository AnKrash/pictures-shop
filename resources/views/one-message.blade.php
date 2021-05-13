@extends('layouts.app')
@section('title-block'){{$data1->subject}}@endsection

@section('content')
    <h1>{{$data1->subject}}</h1>

        <div class="alert alert-info">
           <p>{{$data1->message}}</p>
            <p>{{$data1->email}}-{{$data1->name}}</p>
            <p><small>{{$data1->created_at}}</small></p>
            <a href="{{route('contact-update',$data1->id)}}"><button class="button button-primary">
                    Редактировать
                </button></a>
            <a href="{{route('contact-delete',$data1->id)}}"><button class="button button-danger">
                    Удалить
                </button></a>

        </div>

@endsection
