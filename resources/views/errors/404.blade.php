@include('errors.header_error')
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
                            <a href="#">404 Error</a>
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
                    <p class="container-404">
                        <img src="{{ asset('assets/images/404.png') }}" alt="404 Error" width="394" height="161"/>
                    </p>
                    <hr/>
                    <p class="center-align size-16">
                        Looks like something went wrong! The page you were looking for is not here.
                    </p>
                    <p class="center-align size-16 push-down-50">
                        Go <a href="{{ url('/MyShop') }}">Home</a>
                    </p>
                </section>
            </div>
        </div>
    </div>