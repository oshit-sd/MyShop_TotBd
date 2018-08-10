@extends('layouts.public.MyShop_User_master')
@section('content')

    <div class="darker-stripe">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ url('/MyShop') }}">MyShop</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="{{ url('/UserHome') }}">My Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="push-up blocks-spacer">
            <div class="row">



                <aside class="span3">
                    <div class="sidebar-item">



                        <div>
                            <h3><span class="light">My</span> Account</h3>
                        </div>



                        <div class="row">
                            <div class="span3">
                                <div class="widget">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="{{ url('/home') }}">Account Dashboard <i class="icon-caret-right pull-right"></i></a></li>
                                        <li><a href="#">Account Information <i class="icon-caret-right pull-right"></i></a></li>
                                        <li><a href="#">Address Book <i class="icon-caret-right pull-right"></i></a></li>
                                        <li  class="active"><a href="#">My Orders <i class="icon-caret-right pull-right"></i></a></li>
                                        <li><a href="#">Billing Agreements <i class="icon-caret-right pull-right"></i></a></li>
                                        <li><a href="#">Recurring Profiles <i class="icon-caret-right pull-right"></i></a></li>
                                        <li><a href="#">My Product Reviews <i class="icon-caret-right pull-right"></i></a></li>
                                        <li><a href="#">My Tags <i class="icon-caret-right pull-right"></i></a></li>
                                        <li><a href="#">My Wishlist <i class="icon-caret-right pull-right"></i></a></li>
                                        <li><a href="#">My Applications <i class="icon-caret-right pull-right"></i></a></li>
                                        <li><a href="#">Newsletter Subscriptions <i class="icon-caret-right pull-right"></i></a></li>
                                        <li><a href="#">My Downloadable Products <i class="icon-caret-right pull-right"></i></a></li>
                                    </ul>
                                </div>
                                <div class="widget widget__compare">
                                    <h3><span class="light">Compare</span> Products</h3>
                                    <div class="alert alert-info white-bg in fade">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        Lorem Ipsum Dolor
                                    </div>
                                    <div class="alert alert-info white-bg in fade">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        Ut feugiat mauris
                                    </div>
                                    <div class="push-down-25"></div>
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <a href="#" class="margin-top-10 block">Clear All</a>
                                        </div>
                                        <div class="span6">
                                            <a href="#" class="btn btn-primary btn-block bold higher">COMPARE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

                {{--<style type="text/css">--}}
                {{--a.hvr:hover{--}}
                {{--background-color: #000;--}}
                {{--height: 300px;--}}
                {{--}--}}
                {{--</style>--}}



                <section class="span9">

                    <div class="underlined push-down-20">
                        <h3><span class="light">My</span> Orders</h3>
                    </div>

                    <table class="table table-items push-down-50">
                        <div style=" text-align: center;">
                            @if(isset($message))
                                <div  class="alert alert-danger" style="font-weight: bold; font-size: 14px;">{{ $message }}</div>
                            @endif
                        </div>


                        @if(isset($orders))
                        <thead>
                        <tr>
                            <th colspan="2">Item</th>
                            <th><div class="align-center">Quantity</div></th>
                            <th><div class="align-right">Price</div></th>
                            <th><div class="align-right">Shipping</div></th>
                            <th><div class="align-right">Sub-Total</div></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($orders as $ord)
                             <tr>
                            <td class="image"><img src="{{$ord->img }}" alt style="height: 75px; width: 75px;"/></td>
                            <td class="desc">{{$ord->pro_name }}</td>
                            <td class="qty">
                                <input type="text" class="tiny-size" value="{{$ord->quantity }}"/>
                            </td>
                            <td class="price">
                                {{ number_format($ord->pro_price) }}
                            </td>
                                 <td class="price">
                                 100
                            </td>
                                 <?php
                                 $tt = $ord->total + 100;
                                 ?>
                            <td class="price">
                                {{ number_format($tt)  }}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        @endif
                    </table>

                </section>
            </div>
        </div>
    </div>

@endsection