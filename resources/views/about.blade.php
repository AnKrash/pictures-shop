@extends('layouts.app')
@section('title-block')Про нас@endsection


@section('content')
    <div class="container container-fluid3 p-5 mx-xs-0    px-xs-0">
        <div class="p-5 mx-xs-0  mx-sm-0  px-xs-0">
    <h1>Про нас</h1>
    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc at scelerisque
        libero. Aliquam at arcu mauris. Vivamus dignissim fringilla quam non auctor. Etiam varius nec eros vel feugiat.
        Proin hendrerit neque lacinia, ultrices nisl vel, pulvinar lorem. Donec non ultricies mauris, id hendrerit mi.
        Praesent nec arcu ut metus porttitor auctor ac eget erat. Nulla vel mollis leo. Suspendisse non pulvinar sem.
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam vitae tristique elit. Nam rutrum risus
        vitae magna rhoncus, a lobortis purus efficitur.

        Pellentesque consequat nec ligula vitae dapibus. Nam eget metus iaculis, condimentum libero at, convallis felis.
        Quisque ut commodo ligula. Fusce sit amet nisl id ipsum semper commodo vel vitae urna. Class aptent taciti
        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer placerat, urna vel molestie
        mattis, eros nisi vehicula leo, non iaculis sapien elit id dolor. Nulla nec ante mollis, ultrices felis at,
        sagittis felis.</p>
    </div>

        <div class="p-5 mx-xs-0  mx-sm-0  px-xs-0">
            <h3 class="HeadItems">MEET OUR BEAUTIFUL TEAM!</h3>
            <hr class="hr3">
            <p class="text-items d-none d-sm-block">We are a small team of designers and developers, who help brands
                with big ideas. </p>

            <div class="row text-center">
                <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
                    <img src="Img-main/Ann.png" alt="" height="140" width="140"/>
                    <h6>ANN HATHAWAY</h6>
                    <p class="p3">CEO/Marketing Guru</p>
                    <p class=" d-none d-sm-block employee-descr">Interdum et malesuada fames ac ante ipsum primis in faucibus.
                        Curabitur bibendum, nunc et tempor
                        suscipit, tellus risus sodales mi, non imperdiet tellus purus at neque.</p>
                    <div class=" text-center py-sm-5 ">
                        <div class="">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter-square"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="far fa-envelope"></i>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
                    <img src="Img-main/upton.png" alt="" height="140" width="140"/>
                    <h6>KATE UPTON</h6>
                    <p class="p3">Creative Director</p>
                    <p class=" d-none d-sm-block employee-descr">Fusce lobortis metus vitae erat condimentum, vitae efficitur enim
                        maximus. Mauris sed tempus
                        purus. Nulla sed egestas enim. Integer eget arcu tortor.</p>
                    <div class=" text-center py-sm-5">
                        <div class="">
                            <i class="fab fa-twitter-square"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="far fa-envelope"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
                    <img src="Img-main/olivya.png" alt="" height="140" width="140"/>
                    <h6>OLIVIA WILDE</h6>
                    <p class="p3">Lead Designer</p>
                    <p class=" d-none d-sm-block employee-descr"> Aliquam quis aliquam mauris. Suspendisse mauris arcu, ultricies eu
                        dictum quis, luctus nec dui.
                        Sed lobortis at diam nec venenatis.</p>
                    <div class=" text-center py-sm-5">
                        <div class="">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter-square"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="far fa-envelope"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
                    <img src="Img-main/ashly.png" alt="" height="140" width="140"/>
                    <h6>ASHLEY GREENE</h6>
                    <p class="p3">SEO/Developer</p>
                    <p class="d-none d-sm-block employee-descr"> Phasellus pulvinar sagittis volutpat. Vestibulum ante ipsum primis in
                        faucibus orci luctus et
                        ultrices posuere cubilia curae;</p>
                    <div class=" text-center py-sm-5 ">
                        <div class="">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter-square"></i>
                            <i class="far fa-envelope"></i>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="p-5 mx-xs-0  mx-sm-0  px-xs-0">
                <h3 class="HeadItems">If You want to be a member club-register now!</h3>
                <a class="me-3 py-2 px-3 text-dark  " href="{{route('contact')}}">
                    <h4>Register!</h4>
                </a>

            </div>

@endsection


