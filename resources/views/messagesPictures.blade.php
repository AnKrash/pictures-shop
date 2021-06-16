@extends('layouts.app')
@section('title-block')Классические картины @endsection

@section('content')
    <h1>Классические картины</h1>

    <div class="container ">
        <div class="card-columns">
            @foreach($data as $el)
                <div class="card shadow-sm ">

                    {{--                            TODO change to div, set width, heigth to div set background-image and background-size --}}

                    <img class="bd-placeholder-img card-img-top" style="background-size: cover" src="img/{{$el->image}}"
                         alt="picture">
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
            @endforeach

        </div>
        <div class="container visually-hidden">
            @foreach ($data as $el)
                {{ $el->name }}
            @endforeach
        </div>
        <br><br>
        {{ $data->onEachSide(1)->links() }}

        <footer class="text-muted py-5">
            <div class="container">
                <p class="float-end mb-1">
                    <a href="#">Back to top</a>
                </p>

            </div>
        </footer>
    </div>
@endsection


