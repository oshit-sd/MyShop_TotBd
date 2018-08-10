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
                                            <h1><span class="light">Billing</span> &amp; Shipping Address</h1>
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
                                    <div class="step active">
                                        <div class="step-badge">2</div>
                                          Shipping Address
                                    </div>
                                    <div class="step">
                                        <div class="step-badge">3</div>
                                        <a href="{{ url('/checkoutStep3') }}" style="color: #666;">Payment Method</a>
                                    </div>
                                    <div class="step">
                                        <div class="step-badge">4</div>
                                        Confirm &amp; Pay
                                    </div>
                                </div>
                            </div>

                            <?php
                                    $session = session_id();
                            ?>


                            <form action="{{ url('/ShippingInfo') }}" method="post" class="form-horizontal form-checkout">
                                {{ csrf_field() }}

                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="ses_id" value="{{ $session }}">
                                <div class="control-group">
                                    <label class="control-label" for="f_name">First Name<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="f_name" name="f_name" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="l_name">Last Name<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="l_name" name="l_name" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="mobile">Moblie<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="number" id="mobile" name="mobile" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="email">Email<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="email" id="email" name="email" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="addr1">Address 1<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="addr1" name="addr1" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="addr2">Address 2</label>
                                    <div class="controls">
                                        <input type="text" id="addr2" name="addr2" class="span4">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="city">City<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="city" name="city" class="span4" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="zip">ZIP<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="zip" name="zip" class="span4" required>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="country">Country</label>
                                    <div class="controls">
                                        <select id="country" name="country" class="as-span4">
                                            <option>Bangladesh</option>
                                        </select>
                                    </div>
                                </div>

                                <p class="right-align">
                                    In the next step you will choose a payment method &nbsp; &nbsp;
                                    <button type="submit" class="btn btn-primary higher bold"> CONTINUE  </button>
                                </p>
                            </form>
                            <hr/>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
