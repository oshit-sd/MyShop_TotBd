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
                        <a href="{{ url('/ConfirmOrders') }}">Confirm Orders</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="{{ url('/PendingOrders') }}">Pending Orders</a>
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
                    <h3><span class="light">Pending</span> Orders</h3>
                </div>

                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    {{--<div style=" text-align: center;">--}}
                        {{--@if(isset($message))--}}
                            {{--<div  class="alert alert-danger" style="font-weight: bold; font-size: 14px;">{{ $message }}</div>--}}
                        {{--@endif--}}
                    {{--</div>--}}


                    {{--@if(isset($orders))--}}
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
                            <th><div class="align-center" style="width: 100px;">Action</div></th>
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

                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-center" role="menu">
                                            <li>
                                                <a href="{{ url('/CustomerInfo/'.$ord->pro_id.'/'.$ord->session_id) }}">
                                                    <button type="button" class="btn btn-success">View Details</button>
                                                </a>
                                            </li><br>
                                            <li>
                                                <a href="{{ url('/ConfirmOrder/'.$ord->pro_id.'/'.$ord->session_id) }}">
                                                    <button type="button"  class="btn btn-primary btn-sm">Pending</button>
                                                </a>
                                            </li><br>
                                            <li>
                                                <a href="{{ url('/DeleteOrder/'.$ord->pro_id.'/'.$ord->session_id) }}">
                                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                {{--<td class="price" style="text-align: center;">--}}
                                    {{--<a href="{{ url('/CustomerInfo/'.$ord->pro_id.'/'.$ord->session_id) }}" role="button" data-toggle="modal" class="btn btn-success">View Details </a><br><br>--}}
                                    {{--<a href="{{ url('/ConfirmOrder/'.$ord->pro_id.'/'.$ord->session_id) }}" class="btn btn-danger">Pending</a><br><br>--}}
                                    {{--<a href="{{ url('/DeleteOrder/'.$ord->pro_id.'/'.$ord->session_id) }}" class="btn btn-danger">Pending</a>--}}
                                {{--</td>--}}
                            </tr>
                    @endforeach
                    </tbody>
                    {{--@endif--}}
                </table>

            </section>
        </div>
    </div>
</div>
