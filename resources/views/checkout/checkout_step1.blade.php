@extends('layouts.public.public_master')
@section('content')
<body class=" checkout-page" >
<div class="master-wrapper">
    <div class="container" >
        <div class="row">

            <section class="span12">
                <div class="checkout-container">
                    <div class="row">
                        <div class="span10 offset1">

                            <header style="padding-top: 25px;">
                                <div class="row">
                                    <div class="span2">
                                        <a href="{{ url('/MyShop') }}"><img src="{{ asset('assets/images/logo-bw.png') }}" alt="MyShop" width="48" height="48"/>
                                        {{--<p>Return Shop</p>--}}
                                        </a>
                                    </div>
                                    <div class="span6">
                                        <div class="center-align">
                                            <h1><span class="light">Review</span> Shopping Cart</h1>
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
                                    <div class="step active">
                                        <div class="step-badge">1</div>
                                        Shopping Cart
                                    </div>
                                    <div class="step">
                                        <div class="step-badge">2</div>
                                        Shipping Address
                                    </div>
                                    <div class="step">
                                        <div class="step-badge">3</div>
                                        Payment Method
                                    </div>
                                    <div class="step">
                                        <div class="step-badge">4</div>
                                        Confirm &amp; Pay
                                    </div>
                                </div>
                            </div>


                            <style>
                                a.iconCross{
                                    color: #f4b5c0;
                                }
                                a.iconCross:hover{
                                    color: #f4001b;
                                }
                                 a.iconEdit{
                                    color: #6daa5e;
                                }
                                a.iconEdit:hover{
                                    color: #77df43;
                                }

                            </style>
                            <?php
//                                session_start();
                                $ses = session_id();

                                $sum =  DB::table('shopcarts')->where('session_id', $ses)->sum('total');
                                $st = $sum + 100;

                                $data =  DB::table('paymentinfos')->where('ses_id', $ses)->first();
                            ?>



                            <table class="table table-items">
                                <div style=" text-align: center;">
                                    @if(isset($message))
                                        <div  class="alert alert-danger" style="font-weight: bold; font-size: 14px;">{{ $message }}</div>
                                    @endif
                                </div>

                                @if(isset($products))

                                <thead>
                                <tr>
                                    <th colspan="2">Item</th>
                                    <th><div class="align-center">Quantity</div></th>
                                    <th><div class="align-right">Price</div></th>
                                    <th><div class="align-right">Total</div></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($products as $pro)
                                <tr>
                                    <td class="image"><img src="{{ $pro->img }}" alt style="height: 80px;"/></td>
                                    <td class="desc">{{ $pro->pro_name }} &nbsp;&nbsp;
                                        <a href="{{ url('/RemoveProduct/'.$pro->id) }}" class="iconCross" title="Remove Product">
                                            <i class="fa fa-times-circle fa-lg"></i>
                                        </a>&nbsp;&nbsp;
                                        <a href="{{ url('/EditProduct/'.$pro->id) }}" class="iconEdit" title="Edit Product">
                                            <i class="fa fa-pencil-square fa-lg"></i>
                                        </a>
                                    </td>
                                    <td class="qty">
                                        <input type="text" class="tiny-size" value="{{ $pro->quantity }}"/>
                                    </td>
                                    <td class="price">
                                        {{ number_format($pro->pro_price) }}
                                    </td>
                                    <td class="price">
                                        {{ number_format($pro->total) }}
                                    </td>
                                </tr>
                                 {{--@endif--}}
                                @endforeach



                                <tr>
                                    <td colspan="3" rowspan="2">
                                        <div class="alert alert-info">
                                            <button data-dismiss="alert" class="close" type="button">×</button>
                                            Shipping costs are calculated based on location. <a href="#">More information</a>
                                        </div>
                                    </td>
                                    <td class="stronger">Shipping:</td>
                                    <td class="stronger">
                                        <div class="align-right">
                                            @if(!isset($data))
                                                @if($st < 101)
                                                    00
                                                @else
                                                    100
                                                @endif
                                            @else
                                                00
                                            @endif
                                       </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td class="stronger">Subtotal:</td>
                                    <td class="stronger">
                                        <div class="size-16 align-right">
                                            @if(!isset($data))
                                                @if($st < 101)
                                                    00
                                                @else
                                                    {{ number_format($st) }}
                                                @endif
                                            @else
                                                00
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                @endif
                            </table>

                            <hr/>
                            <p class="right-align">
                                In the next step you will choose your shipping address &nbsp; &nbsp;
                                @if (Route::has('login'))
                                @if (Auth::check())
                                    <a href="{{ url('/checkoutStep2') }}" class="btn btn-primary higher bold">CONTINUE</a>
                                @else
                                <a href="#loginModal" role="button" data-toggle="modal" class="btn btn-primary higher bold">CONTINUE</a>
                                @endif
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection