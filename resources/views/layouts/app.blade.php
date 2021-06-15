    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>"@yield('title-block')</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
     <!--   <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
       <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    </head>
    <body>
    @include('inc.header')

    @if(Request::is('/'))
    @include('inc.hero')

    @endif
    @if(Request::is('basket/index'))
        @include('inc.sale')
    @endif
    @if(Request::is('home'))
        @include('inc/carousel')
    @endif
    <div class="container mt-5">
        @include('inc.messages')

                @yield('content')

                @if(Request::is('/','contact','pictures','allDataVasas','lamps','basket/index'))
                             @include('inc.aside')
@endif

            </div>
        </div>
        @include('inc.footer')

    </div>
    </body>
    </html>
