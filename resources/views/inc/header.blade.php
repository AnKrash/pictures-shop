<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img">
                <title>Bootstrap</title>

            </svg>
            <span class="fs-4">Pictures-shop</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto ">
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('home')}}">Главная</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('about')}}">Про нас</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('contact')}}">Контакты</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('contact-data')}}">Сообщения</a>

            <a href="{{route('basket.index')}}"> <img src="/Img-main/shopping-cart-empty-side-view.svg" height="45"
                                                      alt="basket">
            </a>

                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('admin')}}">Страница Админа</a>
        </nav>
    </div>

</header>
