{{--@include('layouts.public.partials.checkout_head')--}}

@include('layouts.public.partials.MyShopUsers.header')

@include('layouts.public.partials.MyShopUsers.navbar')

@include('layouts.public.partials.alerts')


@yield('content')

@include('layouts.public.partials.MyShopUsers.footer')
@include('layouts.public.partials.checkout_footer')
