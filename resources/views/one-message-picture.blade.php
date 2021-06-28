@extends('layouts.app')
@section('title-block') {{$product->name}} @endsection

@section('content')
    <h1>Name:{{$product->name}}</h1>
    <div class="row">
        <div class="alert alert-info col-8">
            <p>Description:{{$product->description}}</p>
            <link rel="stylesheet" type="text/css" href="https://unpkg.com/xzoom/dist/xzoom.css" media="all" />
            <p><img class="xzoom5" src="/img/{{$product->image}}" xoriginal="/img/{{$product->image}}"
                    alt="picture" ></p>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://unpkg.com/xzoom/dist/xzoom.min.js"></script>
            <script>
                jQuery(function ($) {
                    $(".xzoom").xzoom({
                        position: 'right',
                        Xoffset: 15
                    });
                });
            </script>
            <p><small>Created at:{{$product->created_at}}</small></p>
            <p><small>Price:{{$product->price}}</small></p>
            <p>Are available: {{$product->quantity}} items</p>
            @if ($product->quantity<0)
                @include('inc/out-of-stock')
            @endif
            <form action="{{ route('basket.add', ['id' => $product->id]) }}"
                  method="post" class="form-inline">


                <button type="submit" class="btn btn-success">Добавить в корзину</button>
                @csrf
            </form>

        </div>
        <div class="col-4">
            <h1>About painter:</h1>

            <p>Duis eu tempus elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. In at sapien viverra sem vestibulum dictum eu sit amet libero. Morbi euismod, eros ac
                elementum efficitur, ante nibh euismod urna, vel hendrerit neque mi at mi. Proin quis ipsum eu mi
                finibus iaculis. Proin tincidunt, libero vitae interdum tristique, diam mi interdum augue, ut
                lacinia mi arcu a nisi. Maecenas euismod nisl ac felis efficitur malesuada. Aliquam ac felis sed leo
                pulvinar venenatis at nec dolor. Pellentesque vel felis arcu. Maecenas a felis quis turpis viverra
                pulvinar. In ut odio tortor. Ut sit amet est nec ante scelerisque ullamcorper et in eros. Nam id
                tortor vitae erat pharetra maximus et vitae orci. Nulla condimentum sapien in euismod pretium. Nulla
                arcu quam, porta a mattis id, hendrerit a risus. Donec tristique, augue et mollis fermentum, erat
                leo pulvinar metus, id finibus sapien est non sapien.

                Donec id augue dui. Cras dictum placerat tortor faucibus pretium. Morbi aliquet dolor at imperdiet
                aliquet. In dictum risus et libero ullamcorper, consequat dictum odio lobortis. Duis ornare lorem
                accumsan mi vestibulum iaculis. Suspendisse malesuada, justo eget posuere rhoncus, enim quam semper
                urna, sed pulvinar neque massa vitae est. Sed euismod arcu et venenatis tristique.</p>
        </div>

    </div>
@endsection
