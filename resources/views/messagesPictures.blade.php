@extends('layouts.app')
@section('title-block')Классические картины @endsection

@section('content')
    <h1>Классические картины</h1>

    <body data-new-gr-c-s-check-loaded="14.1014.0" data-gr-ext-installed="">
    <div class="album py-5 bg-light">
        <div class="container ">
            <div class="card-columns">
                @foreach($data as $el)

                    <div class="card">
                        <div class="card shadow-sm ">
                            {{--                            TODO change to div, set width, heigth to div set background-image and background-size --}}

                         <img class="bd-placeholder-img card-img-top" src="img/{{$el->image}}" alt="picture">
                                <div>
                                <div class="card-body">
                                    <p class="card-text">{{$el->name}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{route('one-message-picture', $el->id)}}"
                                               class="btn btn-sm btn-outline-secondary">Детальнее</a>
                                        </div>
                                        <small class="text-muted">Price:{{$el->price}}</small>
                                    </div>

                            </div>
                        </div>
                        </div>

                    </div>@endforeach
            </div>

            <footer class="text-muted py-5">
                <div class="container">
                    <p class="float-end mb-1">
                        <a href="#">Back to top</a>
                    </p>

                </div>
            </footer>

@endsection


