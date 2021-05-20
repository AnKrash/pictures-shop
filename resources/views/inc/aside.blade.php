@section('aside')
<div class="aside">
    <h4>Боковая панель</h4>
    <p>Просто боковая панель</p>
    @show
@if((Request::is('bdvase')))
        @include('inc.sale')
    @endif
    @if((Request::is('lamps')))
        @include('inc.sale')
    @endif
    @if((Request::is('pictures')))
        @include('inc.sale')
    @endif
    @if((Request::is('allDataVasas')))
        @include('inc.sale')
    @endif
    @if((Request::is('basket')))
        @include('inc.dostavka')
    @endif
</div>
