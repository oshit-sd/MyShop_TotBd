@include('layouts.admin.partials.header_myshop')
@include('layouts.public.partials.alerts')
<div class="darker-stripe">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ url('/admin') }}">MyShop</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="{{ url('/PendingOrders') }}">Pending Orders</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="{{ url('/ConfirmOrders') }}">Confirm Orders</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="push-up blocks-spacer">
        <div class="row">
            <section class="span12">
                <div class="underlined push-down-20">
                    <h3><span class="light">Confirm</span> Orders</h3>
                </div>

                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">

                        <thead>
                        <tr>
                            <th>Item</th>
                            <th><div class="align-center">Cus-Name</div></th>
                            <th><div class="align-center">Mobile</div></th>
                            <th><div class="align-center">Email</div></th>
                            <th><div class="align-center">Quantity</div></th>
                            <th><div class="align-center">Price</div></th>
                            <th><div class="align-center">Ship</div></th>
                            <th><div class="align-center">Sub-Total</div></th>
                            <th><div class="align-center">Action</div></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($pendingOrder as $ord)
                            <tr>
                                <td class="image"><img src="{{$ord->img }}" alt style="height: 75px; width: 100px;"/> <br> <br> {{$ord->pro_name }}</td>
                                <td class="price" style="text-align: center;">{{$ord->name }}</td>
                                <td class="price" style="text-align: center;">{{$ord->mobile }} </td>
                                <td class="price" style="text-align: center;">{{$ord->email }} </td>
                                <td class="qty" style="text-align: center;">
                                    <input type="text" class="tiny-size" value="{{$ord->quantity }}"/>
                                </td>
                                <td class="price" style="text-align: center;">{{ number_format($ord->pro_price) }} </td>
                                <td class="price" style="text-align: center;"> 100 </td>
                                <td class="price" style="text-align: center;">
                                    <?php $add = $ord->total + 100;  ?>
                                    {{ number_format($add) }}
                                </td>
                                <td class="price" style="text-align: center;">
                                    <a href="{{ url('/CustomerInfo/'.$ord->pro_id.'/'.$ord->session_id) }}" role="button" data-toggle="modal" class="btn btn-success">View Details </a><br><br><br>
                                    <a href="#" class="btn btn-primary">Order Confirm</a>
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>

            </section>
        </div>
    </div>
</div>
