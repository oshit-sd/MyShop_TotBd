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
                                        <li class="active"><a href="{{ url('/home') }}">Account Dashboard <i class="icon-caret-right pull-right"></i></a></li>
                                        <li><a href="#">Account Information <i class="icon-caret-right pull-right"></i></a></li>
                                        <li><a href="#">Address Book <i class="icon-caret-right pull-right"></i></a></li>
                                        <li><a href="{{ url('/MyOrders') }}">My Orders <i class="icon-caret-right pull-right"></i></a></li>
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
                            </div>
                        </div>
                    </div>
                </aside>

                <section class="span9">
                    <div style="height: 40px; font-size: 16px; width: 100%; padding-top: 12px; border-bottom: 1px solid #ccc;">
                        <span>My <sapn style=" font-weight: bold;">Dashboard</sapn></span>
                    </div>
                    <div><br>
                        <span  style="font-size: 14px; font-weight: bold; margin-top: 10px; ">
                           Hello, {{ Auth::user()->name }} ! 
                        </span>
                        <p>
                            From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.
                        </p>
                    </div>

                    <div style="height: auto; width: 100%; border: 1px solid #ccc; border-radius: 5px;">
                        <div style="width: 96%; height: 250px; padding-top: 15px; margin: auto;">
                            <div style="height: 30px; border-bottom: 1px solid #ccc; ">
                                <sapn style="text-shadow: 1px 2px 8px #ccc;  color: #1e90ff; font-size: 15px; font-weight: bold;">
                                    Account Information
                                </sapn>
                            </div>


                            <div style=" width: 49%; height: 120px; float: left;">
                                <div style="height: 20px; padding-top: 10px; border-bottom: 1px solid #ccc; ">
                                    <sapn style="color: #191970; font-weight: bold; text-shadow: 1px 2px 8px #ccc;">
                                        Contact Information
                                    </sapn>
                                    <span style="float: right; text-decoration: underline;"><a href="#">Edit</a>
                                </div>
                                <div style="margin-top: 5px; color: #666;">
                                    <span >{{ Auth::user()->name }}</span> <br>
                                    <span>{{ Auth::user()->email }}</span> <br>
                                    <span style="text-decoration: underline;"><a href="#">Change Password</a></span>
                                </div>
                            </div>


                            <div style=" width: 49%; height: 120px; float: right;">
                                <div style="height: 20px; padding-top: 10px; border-bottom: 1px solid #ccc; ">
                                    <sapn style="color: #191970;text-shadow: 1px 2px 8px #ccc;font-weight: bold;">
                                        Newsletters
                                    </sapn>
                                    <span style="float: right; text-decoration: underline;"><a href="#">Edit</a>
                                </div>
                                <div style="margin-top: 5px; color: #191970;">
                                    You are currently not subscribed to any newsletter.
                                </div>
                            </div>


                            <div style="height: 20px; width: 100%; float: left; border-bottom: 1px solid #ccc;">
                                <sapn style="color: #191970; font-weight: bold; text-shadow: 1px 2px 8px #ccc;">
                                    Address Book
                                </sapn>
                                <span style="float: right; text-decoration: underline;"><a href="#">Manage Addresses</a>
                            </div>


                            <div style=" width: 49%; height: 120px; float: left;">
                                <div style="height: 20px; padding-top: 10px; ">
                                    <sapn style="color: #191970; font-weight: bold;  font-size: 11px;">
                                        DEFAULT BILLING ADDRESS
                                    </sapn>
                                </div>
                                <div style="margin-top: 5px; color: #666;">
                                    <span >You have not set a default billing address</span> <br>
                                    <span style="text-decoration: underline;"><a href="#">Edit Address</a></span>
                                </div>
                            </div>


                            <div style=" width: 49%; height: 120px; float: right;">
                                <div style="height: 20px; padding-top: 10px; ">
                                    <sapn style="color: #191970; font-weight: bold; font-size: 11px;">
                                        DEFAULT SHIPPING ADDRESS
                                    </sapn>
                                </div>
                                <div style="margin-top: 5px; color: #666;">
                                    <span>You have not set a default shipping address.</span><br>
                                     <span style="text-decoration: underline;">
                                        <a href="#">Edit Address</a>
                                    </span>
                                </div>
                            </div>
                        </div><br>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection