<header>

    <div class="container py-3">

        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <div class="navbar-brand d-flex align-items-center text-dark text-decoration-none"><h3>PICTURE-SHOP</h3></div>
            <nav class="navbar  navbar-expand-lg   justify-content-md-end  ">
                <a class=" me-3 py-2 px-3 text-dark text-decoration-none" href="{{route('home')}}"><h4>Главная</h4></a>
                <a class="me-3 py-2 px-3 text-dark text-decoration-none" href="{{route('about')}}"><h4>Про нас</h4></a>
                <a class="me-3 py-2 px-3 text-dark text-decoration-none" href="{{route('contact')}}"><h4>Контакты</h4>
                </a>
                <a class="me-3 py-2 px-3 text-dark text-decoration-none" href="{{route('contact-data')}}"><h4>
                        Сообщения</h4></a>

                <a class="me-3 py-2 px-3 text-dark text-decoration-none"
                   href="{{route('basket.index')}}">
                    <img src="/Img-main/shopping-cart-empty-side-view.svg" height="45"
                         alt="basket">


                    <?php $quantity_cart = 0 ?>
                    @if (session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <?php $quantity_cart += $details["quantity"] ?>
                        @endforeach
                    @endif
                    {{ $quantity_cart }}
                </a>
                <a class="me-3 py-2 px-3 text-dark text-decoration-none" href="{{route('admin')}}"><h4>Страница
                        Админа</h4></a>
            </nav>
        </div>

    </div>
</header>
