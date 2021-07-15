@extends('layouts.app')
@section('title-block')Все сообщения@endsection

@section('content')
    <h1>Все сообщения</h1>
   @foreach($data1 as $el)
      <div class="alert alert-info">
         <h5>{{$el->subject}}</h5>
          <h6>{{$el->email}}</h6>
          <p><small>{{$el->created_at}}</small></p>
          <a href="{{route('contact-data-one',$el->id)}}"><button class="button button-warning">
Детальнее
              </button></a>

       </div>
   @endforeach
@endsection

