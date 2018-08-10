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
                                            <h1><span class="light">Choose</span> Payment Method</h1>
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
                                    <div class="step active">
                                        <div class="step-badge">3</div>
                                        Payment Method
                                    </div>
                                    <div class="step">
                                        <div class="step-badge">4</div>
                                        <a href="{{ url('/checkoutStep4') }}"  style="color: #666;">Confirm &amp; Pay</a>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $ses = session_id();
                            ?>


                            <span class="btn btn-danger circle pull-left"><i class="icon-chevron-right"></i></span>
                            <div class="shifted-left-45 clearfix">
                                <h3 class="no-margin"><span class="light">Credit</span> Card</h3>
                                <p class="push-down-30">We accept MasterCard, Visa and American Express</p>

                                <div class="accordion-group accordion-style-2 active">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                            <span class="bg-for-icon"><i class="icon-minus"></i><i class="icon-plus"></i></span>
                                            Credit Card
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <form action="{{ url('/PaymentInfo') }}" method="post" class="form-horizontal form-checkout">
                                                {{ csrf_field() }}

                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                <input type="hidden" name="ses_id" value="{{ $ses }}">
                                                <div class="control-group">
                                                    <label class="control-label" for="firstName">First Name<span class="red-clr bold">*</span></label>
                                                    <div class="controls">
                                                        <input type="text"  name="f_name" id="firstName" class="span4" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="lastName">Last Name<span class="red-clr bold">*</span></label>
                                                    <div class="controls">
                                                        <input type="text" name="l_name" id="lastName" class="span4" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="cardNum">Card Number<span class="red-clr bold">*</span></label>
                                                    <div class="controls">
                                                        <input type="text" name="c_number1" id="cardNum" class="span1 card-num-input center-align" maxlength="4">
                                                        <input type="text" name="c_number2"  class="span1 card-num-input center-align" maxlength="4">
                                                        <input type="text" name="c_number3"  class="span1 card-num-input center-align" maxlength="4">
                                                        <input type="text" name="c_number4" class="span1 card-num-input center-align add-tooltip" maxlength="4" data-title="The 16 digits on the front of the card">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="cvc">CVC or CVS<span class="red-clr bold">*</span></label>
                                                    <div class="controls">
                                                        <input id="cvc" type="text" name="cvs" class="span1 center-align add-tooltip" maxlength="3" data-title="Last 3 digits on back of card" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="exp">Expiration Date<span class="red-clr bold">*</span></label>
                                                    <div class="controls">
                                                        <select id="exp" name="month" class="input-small month-push-right" required>
                                                            <option value="0">Month</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                            <option value="5">05</option>
                                                            <option value="6">06</option>
                                                            <option value="7">07</option>
                                                            <option value="8">08</option>
                                                            <option value="9">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        <select id="exp"  name="year" class="input-small" required>
                                                            <option value="0">Year</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2019">2020</option>
                                                            <option value="2019">2021</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <p class="right-align">
                                                    In the next step you will be able to review and confirm the order &nbsp; &nbsp;
                                                    <button type="submit" class="btn btn-primary higher bold"> CONTINUE  </button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <br><br>


                            <span class="btn btn-danger circle pull-left"><i class="icon-chevron-down"></i></span>
                            <div class="shifted-left-45 clearfix">
                                <h3 class="no-margin">
                                    <span class="light">PayPal</span> &nbsp; &nbsp; &nbsp;
                                    <a><img src="{{ asset('assets/images/buttons/paypal.gif') }}" alt="PayPal" width="145" height="42"/></a>
                                </h3>


                                <div class="accordion-group accordion-style-2">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                            <span class="bg-for-icon"><i class="icon-minus"></i><i class="icon-plus"></i></span>
                                            PayPal
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <form action="{{ url('/PaymentInfo') }}" method="post" class="form-horizontal form-checkout">
                                                {{ csrf_field() }}

                                                <input type="hidden" name="user_id" value="{{ session('user_id') }}">
                                                <input type="hidden" name="ses_id" value="{{ session('ses_id') }}">
                                                <div class="control-group">
                                                    <label class="control-label" for="firstName">First Name<span class="red-clr bold">*</span></label>
                                                    <div class="controls">
                                                        <input type="text"  name="f_name" id="firstName" class="span4" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="lastName">Last Name<span class="red-clr bold">*</span></label>
                                                    <div class="controls">
                                                        <input type="text" name="l_name" id="lastName" class="span4" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="cardNum">Card Number<span class="red-clr bold">*</span></label>
                                                    <div class="controls">
                                                        <input type="text" name="c_number1" id="cardNum" class="span1 card-num-input center-align" maxlength="4">
                                                        <input type="text" name="c_number2"  class="span1 card-num-input center-align" maxlength="4">
                                                        <input type="text" name="c_number3"  class="span1 card-num-input center-align" maxlength="4">
                                                        <input type="text" name="c_number4" class="span1 card-num-input center-align add-tooltip" maxlength="4" data-title="The 16 digits on the front of the card">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="cvc">CVC or CVS<span class="red-clr bold">*</span></label>
                                                    <div class="controls">
                                                        <input id="cvc" type="text" name="cvs" class="span1 center-align add-tooltip" maxlength="3" data-title="Last 3 digits on back of card" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="exp">Expiration Date<span class="red-clr bold">*</span></label>
                                                    <div class="controls">
                                                        <select id="exp" name="month" class="input-small month-push-right" required>
                                                            <option value="0">Month</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                            <option value="5">05</option>
                                                            <option value="6">06</option>
                                                            <option value="7">07</option>
                                                            <option value="8">08</option>
                                                            <option value="9">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        <select id="exp"  name="year" class="input-small" required>
                                                            <option value="0">Year</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2019">2020</option>
                                                            <option value="2019">2021</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <p class="right-align">
                                                    In the next step you will be able to review and confirm the order &nbsp; &nbsp;
                                                    <button type="submit" class="btn btn-primary higher bold"> CONTINUE  </button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>

@endsection

