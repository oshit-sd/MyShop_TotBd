@include('layouts.public.partials.header_css')
<body class>
<div class="master-wrapper"> {{--rgba(51,8,14,0.95);  rgba(28,50,77,0.95) --}}

    <header id="header"  style="background-color: rgba(28,41,79,0.97)">
        <div class="darker-row">
            <div class="container">
                <div class="row">
                    <div class="span4" >
                        <div class="higher-line">
                            Wellcome! Please
                            <a href="#registerModal" role="button" data-toggle="modal">Register</a> or
                            <a href="#loginModal" role="button" data-toggle="modal">Login</a>

                            @if(count($errors))
                              <script>alert('Opps !!! The email has already been taken.')</script>
                                {{--<div class="alert alert-danger">--}}
                                    {{--<ul>--}}
                                        {{--@foreach($errors->all() as $error)--}}
                                            {{--<li>{{ $error }}</li>--}}
                                        {{--@endforeach--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            @endif

                            {{--@if(Session::has('message'))--}}
                                 {{--<script>alert('Welcome !!! Your Account Successfully Created , Please Login')</script>--}}
                            {{--@endif--}}

                            {{--@if(Session::has('unsucess'))--}}
                                 {{--<script>alert( 'Opps !!! Wrong email or password')</script>--}}
                            {{--@endif--}}

                            {{--@if(Session::has('update'))--}}
                                 {{--<script>alert( 'Thank You !!! Your Product Info Update Successfully')</script>--}}
                            {{--@endif--}}

                            {{--@if(Session::has('vouSecure'))--}}
                                {{--<script>  alert('Sorry !!! You Can Not See This Page Before The Complete Chekout Step 1 to 4')</script>--}}
                            {{--@endif--}}
                        </div>
                    </div>
                    <div class="span8">
                        <div class="topmost-line">
                            <div class="higher-line">

                                <div style=" float: left; height: 30px; width: 200px;">
                                    <!-- BEGIN: Powered by Supercounters.com -->
                                    <script type="text/javascript" src="//widget.supercounters.com/ssl/hit.js"></script>
                                    <script type="text/javascript">sc_hit(1442136,59,6);</script>
                                    <!-- END: Powered by Supercounters.com -->
                                </div>


                                    &nbsp; | &nbsp;
                                <a href="{{ url('/checkoutStep1') }}" role="button" data-toggle="modal" class="gray-link">Shop Cart</a>
                                &nbsp; | &nbsp;
                                @if (Route::has('login'))
                                @if (Auth::check())
                                <a href="{{ url('/home') }}" role="button" data-toggle="modal" class="gray-link">My account</a>
                                 @else
                                <a <a href="#loginModal" role="button" data-toggle="modal" class="gray-link">My account</a>
                                @endif
                                @endif
                            </div>
                            &nbsp;

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">



                <div class="span8">
                    <a class="brand" href="{{ url('/MyShop') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Webmarket Logo" width="48" height="48"/>
                        <span class="pacifico" style=" color: #f8f8f8;">MyShop</span>
                        {{--<span class="tagline" style=" color: #ccc;">This Is Really Cool Shopping Site, Shop Now</span>--}}
                        <span class="tagline" style=" color: #ccc;">You Can Easily Shop Any Product In This Site, Shop Now</span>
                    </a>
                </div>

                <div class="span4">
                    <a class="brand">
                        <span class="tagline" style=" color: #ccc;">Contact</span>
                        <span class="tagline" style=" color: #ccc;" >01700000000</span>
                        <span class="tagline" style=" color: #ccc;" >0180000000</span>
                        <span class="tagline" style=" color: #ccc;" >0190000000</span>
                    </a>

                </div>


            </div>
        </div>
    </header>

