@extends('layouts.app')
@section('title-block')Страница Контактов@endsection

@section('content')

    <div class="p-3 mx-xs-0    px-xs-0 mx-xs-0  mx-sm-0  px-sm-0">
        <h2 class="HeadItems HeadItems6">The members of our fan-club:</h2>
    </div>
    <div class=" row  justify-content-center   py-sm-5 py-md-5 my-md-5 row6"
    >
        <div class="col-auto">
            <img src="Img-main/1933_oooo.plus.png" alt="" height="270" width="270"/>
        </div>
        <div class="col ">
            <p style="font-style: italic"> Suspendisse mauris arcu</p>
            <p class=" d-none d-sm-block">ultricies eu dictum quis, luctus nec dui. Sed
                lobortis at diam nec
                venenatis.</p>
            <h6>CHANEL IMAN</h6>
            <p class="p6">Ceo of Pinterest</p>
        </div>
        <div class=" col-auto">

            <img src="Img-main/1706_oooo.plus.png" alt="" height="270" width="270"/></div>
        <div class="col">
            <p style="font-style: italic">Fusce a sapien id diam</p>
            <p class=" d-none d-sm-block">tincidunt pharetra ac vitae nunc. Aliquam a dui sed
                elit posuere bibendum eu posuere risus. </p>
            <h6>ADRIANA LIMA</h6>
            <p class="p6">Founder of Instagram</p>
        </div>

    </div>
    <div class=" row  justify-content-center row6">
        <div class="col-auto">
            <img src="Img-main/1991_oooo.plus.png" alt="" height="270" width="270"/></div>
        <div class="col">
            <p style="font-style: italic"> Nullam imperdiet</p>
            <p class=" d-none d-sm-block">urna sodales leo bibendum tristique. Praesent vehicula
                finibus tempus. Integer at est lacinia erat dignissim faucibus quis in massa.
            </p>
            <h6>ANNE HATHAWAY</h6>
            <p class="p6">Lead Designer at Behance</p>
        </div>
        <div class="col-auto">

            <img src="Img-main/1271_oooo.plus.png" alt="" height="270" width="270"/></div>
        <div class="col">
            <p style="font-style: italic"> Curabitur bibendum</p>
            <p class=" d-none d-sm-block">nunc et tempor suscipit, tellus risus sodales mi, non
                imperdiet tellus purus at neque. Fusce lobortis metus vitae erat condimentum </p>
            <h6>EMMA STONE</h6>
            <p class="p6">Co-foundef of Shazam</p>
        </div>

    </div>

    <div class=" my-5 p-2 mx-xs-0    px-xs-0 mx-xs-0  mx-sm-0  px-sm-0">
        <h3>If You want to be a member club-register now!</h3>
        <h3>If You want to make a message-register now!</h3>
        <h3>If You want to have a message from latest news about art-register now!</h3>
    </div>
    <br><br>
    <h1>Страница Контактов</h1>

    <form action={{route('contact-form')}} method="post">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Введите email </label>
            <input type="text" name="email" placeholder="Введите email" id="email"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Subject" id="subject"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Cообщение</label>
            <textarea name="message" id="message" placeholder="Введите сообщение"
                      class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection
