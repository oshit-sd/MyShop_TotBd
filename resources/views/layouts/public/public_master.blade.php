
@include('layouts.public.partials.header')

@include('layouts.public.partials.navbar')

@include('layouts.public.partials.alerts')

@yield('content')

@include('layouts.public.partials.footer')


@include('auth.MyshopUserregesterLogin')


@include('layouts.public.partials.footer_script')