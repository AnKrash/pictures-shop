@section('aside')
<div class="aside">
    <h4>Боковая панель</h4>
    <p>Просто боковая панель</p>
    @show

    @if((Request::is('basket/index')))
        @include('inc.dostavka')
    @endif
</div>
