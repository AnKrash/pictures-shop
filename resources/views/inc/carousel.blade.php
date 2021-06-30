@section('carousel')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true">

            </button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="img-main/stars.jpg" class="bd-placeholder-img" width="100%" height="550px"
                     aria-hidden="true" alt="1" >

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img-main/night.jpeg" class="bd-placeholder-img" width="100%" height="550px"
                     aria-hidden="true" alt="2" >


                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">

                <img src="img-main/abdullah.jpg" class="bd-placeholder-img" width="100%" height="550px"
                     aria-hidden="true" alt="3" >
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
{{--        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Previous</span>--}}
{{--        </button>--}}
{{--        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Next</span>--}}
{{--        </button>--}}
    </div>


{{--    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">--}}
{{--        <div class="carousel-inner">--}}
{{--            <div class="carousel-item active">--}}
{{--                <img class="d-block w-100" src="img-main/stars.jpg/?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img class="d-block w-100" src="img-main/night.jpeg/?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img class="d-block w-100" src="img-main/abdullah.jpg/?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@show
