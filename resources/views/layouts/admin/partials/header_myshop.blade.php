
@include('layouts.public.partials.header_css')
<body class>
<div class="master-wrapper">

    <header id="header"  style="background-color: rgba(11,16,67,0.96);">

        <div class="container">
            <div class="row">

                <div class="span7">
                    <a class="brand" href="{{ url('/admin/dashboard') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Webmarket Logo" width="48" height="48"/>
                        <span class="pacifico" style=" color: #f8f8f8;">MyShop</span>
                        <span class="tagline" style=" color: #ccc;">Admin Dashboard</span>
                    </a>
                </div>


            </div>
        </div>
    </header>
</div>

@include('layouts.public.partials.footer_script')