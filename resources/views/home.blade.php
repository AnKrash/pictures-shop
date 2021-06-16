@extends('layouts.app')
@section('title-block')Главная страница@endsection


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-discount-product mt-30">
                    <div class="product-image slick-initialized slick-slider">
                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 555px; transform: translate3d(0px, 0px, 0px);">
                                <img
                                    src="img-main/rose.jpg"
                                    alt="Product" class="slick-slide slick-current slick-active"
                                    data-slick-index="0" aria-hidden="false" style="width:300px;height: 400px" tabindex="0"></div></div>
                    </div><br><br>
                    <div class="product-content">
                        <h4 class="content-title mb-15">Classic <br> For your home</h4><br>
                        <a href="{{route('allDataPictures')}}">View Collection <i class="lni-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-discount-product mt-30">
                    <div class="product-image slick-initialized slick-slider">
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 555px; transform:
                            translate3d(0px, 0px, 0px);">
                                <img src="img-main/pixabay.jpg"
                                     alt="Product" class="slick-slide slick-current slick-active"
                                     data-slick-index="0" aria-hidden="false" style="width:300px;height: 400px" tabindex="0">
                            </div></div>
                    </div><br><br>
                    <div class="product-content">
                        <h4 class="content-title mb-15">Sculpture <br> For your memory</h4><br>
                        <a href="{{route('allDataLamps')}}">View Collection <i class="lni-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-discount-product mt-30">
                    <div class="product-image slick-initialized slick-slider">
                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 555px; transform: translate3d(0px, 0px, 0px);">
                                <img src="img-main/pexels.jpg"
                                     alt="Product" class="slick-slide slick-current slick-active" data-slick-index="0"
                                     aria-hidden="false" style="width:300px;height: 400px" tabindex="0"></div></div>
                    </div><br><br>
                    <div class="product-content">
                        <h4 class="content-title mb-15">Modern art <br> For you fantasy</h4><br>
                        <a href="{{route('allDataVase')}}">View Collection <i class="lni-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('aside')
@parent


@endsection
