@extends('layouts.app')
@section('title-block')Корзина@endsection


@section('content')
    {{--    todo add div class text-danger for handling of errors--}}

    <div class="">

    </div>
{{--                      @if($details['quantity'] > DB::table('pictures')->find($id)['quantity'])--}}
{{--                          GET LESS QUANTITY!--}}

{{--                    @endif--}}
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        <?php $total = 0 ?>
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                {{ $total += $details['price'] * $details['quantity'] }}
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100"
                                                                 class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity"/>
                    </td>


                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
{{--                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}">
<i class="fa fa-refresh"></i></button>--}}
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i
                                class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total {{ $total }}</strong></td>
        </tr>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
            </td>
            <td colspan="2" class="hidden-xs"></td>
            <td><a href="{{ url('basketcheckout') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Make
                    Order</a>
            </td>
            <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
        </tr>
        </tfoot>
    </table>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).on("click", ".update-cart", function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ url('/basket/update')}}',
            method: "patch",
            data: {
                {{--_token: '{{ csrf_token() }}',--}}
                id: ele.attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
                window.location.reload();
            }
        });
    });
    $(document).on("click", ".remove-from-cart", function (e) {
        e.preventDefault();
        if (confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('/basket/remove') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: $(this).attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
