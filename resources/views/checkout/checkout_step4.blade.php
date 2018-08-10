@extends('layouts.public.MyShop_User_master')
@section('content')

<body class=" checkout-page">
<div class="master-wrapper">
    <div class="container">
        <div class="row">

            <section class="span12">
                <div class="checkout-container">
                    <div class="row">
                        <div class="span10 offset1">

                            <header style="padding-top: 25px;">
                                <div class="row">
                                    <div class="span2">
                                        <a href="{{ url('/UserHome') }}"><img src="{{ asset('assets/images/logo-bw.png') }}" alt="MyShop" width="48" height="48"/>
                                            {{--<p>Return Shop</p>--}}
                                        </a>
                                    </div>
                                    <div class="span6">
                                        <div class="center-align">
                                            <h1><span class="light">Confirm</span> &amp; Pay</h1>
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="right-align">
                                            <img src="{{ asset('assets/images/buttons/security.jpg')}}" alt="Security Sign" width="92" height="65"/>
                                        </div>
                                    </div>
                                </div>
                            </header>



                            <div class="checkout-steps">
                                <div class="clearfix">
                                    <div class="step done">
                                        <div class="step-badge"><i class="icon-ok"></i></div>
                                        <a href="{{ url('/checkoutStep1') }}">Shopping Cart</a>
                                    </div>
                                    <div class="step done">
                                        <div class="step-badge"><i class="icon-ok"></i></div>
                                        <a href="{{ url('/checkoutStep2') }}">Shipping Address</a>
                                    </div>
                                    <div class="step done">
                                        <div class="step-badge"><i class="icon-ok"></i></div>
                                        <a href="{{ url('/checkoutStep3') }}">Payment Method</a>
                                    </div>
                                    <div class="step active">
                                        <div class="step-badge">4</div>
                                        Confirm &amp; Pay
                                    </div>
                                </div>
                            </div>

                            <?php
                            $ses = session_id();

                            $sum =  DB::table('shopcarts')->where('session_id', $ses)->sum('total');
                            $st = $sum + 100;
                            ?>

                            <table class="table table-items">
                                <thead>
                                <tr>
                                    <th colspan="2">Item</th>
                                    <th><div class="align-center">Quantity</div></th>
                                    <th><div class="align-right">Price</div></th>
                                    <th><div class="align-right">TOTAL</div></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $pro)
                                <tr>
                                    <td class="image"><img src="{{ $pro->img }}" alt style="height: 75px; width: 75px;"/></td>
                                    <td class="desc">{{ $pro->pro_name }}</td>
                                    <td class="qty"><input type="text" class="tiny-size" value="{{ $pro->quantity }}"/></td>
                                    <td class="price">{{ number_format($pro->pro_price) }}</td>
                                    <td class="price">{{ number_format($pro->total) }}</td>
                                </tr>
                               @endforeach
                                <tr>
                                    <td colspan="3" rowspan="2">
                                        &nbsp;
                                    </td>
                                    <td class="stronger">Shipping:</td>
                                    <td class="stronger"><div class="align-right">100</div></td>
                                </tr>
                                <tr>
                                    <td class="stronger">Subtotal:</td>
                                    <td class="stronger">
                                        <div class="size-16 align-right">
                                            @if($st < 101)
                                                00
                                            @else
                                                {{ number_format($st) }}
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <p class="right-align">
                                <a href="{{ url('/Voucher') }}" type="submit" class="btn btn-primary higher bold"> CONTINUE  &amp; PAY</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


@endsection