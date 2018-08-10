@include('layouts.public.partials.header_css')
<body class>
<div class="master-wrapper">

    <header id="header"  style="background-color: rgba(11,16,67,0.96);">
        <div class="darker-row">
            <div class="container">
                <div class="row">
                    <div class="span4" >
                        <div class="higher-line">
                            Wellcome! <strong style="color: #507ad4;">{{ Auth::user()->name }} </strong>

                            @if ($errors->has('email'))
                                <script>alert('Opps !!! The email has already been taken.')</script>
                            {{--@elseif($errors->has('ses_id'))--}}
                                {{--<script>alert('Opps !!! Your info has already been taken.')</script>--}}
                            @elseif(count($errors))
                                <script>alert('Opps !!! Something Went Wrong,Please Check Again.')</script>
                            @endif

                            {{--@if(count($errors))--}}
                                {{--<script>alert('Opps !!! Something Went Wrong,Please Check Again.')</script>--}}
                                {{--<div class="alert alert-danger">--}}
                                {{--<ul>--}}
                                {{--@foreach($errors->all() as $error)--}}
                                {{--<li>{{ $error }}</li>--}}
                                {{--@endforeach--}}
                                {{--</ul>--}}
                                {{--</div>--}}
                            {{--@endif--}}

                            {{--@if(Session::has('info'))--}}
                                {{--<script>alert('Thank You !!! Your Information Successfully Stored')</script>--}}
                            {{--@endif--}}

                            {{--@if(Session::has('card'))--}}
                                {{--<script>alert('Thank You !!! Your Card Info Successfully Stored')</script>--}}
                            {{--@endif--}}

                            {{--@if(Session::has('check'))--}}
                                {{--<script>alert('Opps !!! Your Cart Is Empty, Please Shop')</script>--}}
                            {{--@endif--}}

                            {{--@if(Session::has('unnes'))--}}
                                {{--<script>  alert('Please !!! Give Shipping Address Before Payment Method ')</script>--}}
                            {{--@endif--}}

                            {{--@if(Session::has('vouSecure'))--}}
                                {{--<script>  alert('Sorry !!! You Can Not See This Page Before The Complete Chekout Step 1 to 4')</script>--}}
                            {{--@endif--}}
                        </div>
                    </div>
                    <div class="span8" >
                        <div class="topmost-line">
                            <div class="higher-line" style="color: #f00;">
                                <a href="{{ url('/UserHome') }}" role="button" data-toggle="modal" class="gray-link">My account</a>
                                &nbsp; | &nbsp;
                                <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="icon-key"></i> Log Out

                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                            </div>
                            &nbsp;

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">



                <div class="span7">
                    <a class="brand" href="{{ url('/MyShop') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Webmarket Logo" width="48" height="48"/>
                        <span class="pacifico" style=" color: #f8f8f8;">MyShop</span>
                        <span class="tagline" style=" color: #ccc;">You Can Easily Shop Any Product In This Site, Shop Now</span>
                    </a>
                </div>


            </div>
        </div>
    </header>

