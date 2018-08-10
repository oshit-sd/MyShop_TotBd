
@extends('layouts.public.public_master')
@section('content')
    @include('home.slider')

    @include('home.featured')

    @include('home.new_products')

    @include('home.popular_products')

    @include('home.latestNews')

    @include('home.brands')
@endsection