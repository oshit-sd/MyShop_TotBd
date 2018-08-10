
@extends('layouts.public.public_master')
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
                            <a href="{{ url('/About-Us') }}">About Us</a>
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



                        <div class="underlined">
                            <h3><span class="light">Our</span> Team</h3>
                        </div>



                        <div class="row">
                            <div class="span3" id="spyMenu">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active"><a href="#jaka">Oshit Sutra Dar <i class="icon-caret-right pull-right"></i></a></li>
                                    <li><a href="#primoz">Bappy Sutra Dar <i class="icon-caret-right pull-right"></i></a></li>
                                    {{--<li><a href="#ana">Ana Karenina <i class="icon-caret-right pull-right"></i></a></li>--}}
                                    {{--<li><a href="#andre">Andre Agassi <i class="icon-caret-right pull-right"></i></a></li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>



                <section class="span9">



                    <div class="underlined push-down-20">
                        <h3><span class="light">A</span> Little Something About Us</h3>
                    </div>



                    <section class="blocks-spacer">
                        <h5><span class="light">How</span> Everything Started</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat mauris eget magna egestas porta. Curabitur sagittis sagittis neque rutrum congue. Donec lobortis dui sagittis, ultrices nunc ornare, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet interdum ligula placerat. Maecenas auctor, sem nec eleifend blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat mauris eget magna egestas porta. Curabitur sagittis sagittis neque rutrum congue. Donec lobortis dui sagittis, ultrices nunc ornare, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet interdum ligula placerat. Maecenas auctor, sem nec eleifend blandit.</p>
                        <h5><span class="light">What</span> Happens Next</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat mauris eget magna egestas porta. Curabitur sagittis sagittis neque rutrum congue. Donec lobortis dui sagittis, ultrices nunc ornare, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet interdum ligula placerat. Maecenas auctor, sem nec eleifend blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat mauris eget magna egestas porta. Curabitur sagittis sagittis neque rutrum congue. Donec lobortis dui sagittis, ultrices nunc ornare, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet interdum ligula placerat. Maecenas auctor, sem nec eleifend blandit.</p>
                        <h5><span class="light">And</span> Who We Are Today!</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat mauris eget magna egestas porta. Curabitur sagittis sagittis neque rutrum congue. Donec lobortis dui sagittis, ultrices nunc ornare, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet interdum ligula placerat. Maecenas auctor, sem nec eleifend blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat mauris eget magna egestas porta. Curabitur sagittis sagittis neque rutrum congue. Donec lobortis dui sagittis, ultrices nunc ornare, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet interdum ligula placerat. Maecenas auctor, sem nec eleifend blandit.</p>
                    </section>



                    <section>



                        <div class="underlined push-down-20">
                            <h3><span class="light">Faces</span> Behind The Webmarket</h3>
                        </div>

                        <div class="row-fluid push-down-20" id="jaka">
                            <div class="span4">
                                <a href="#"><img src="{{ asset('assets/images/dummy/about-us/profile-1.jpg') }}" alt="person" width="550" height="660"/></a>
                            </div>
                            <div class="span4">
                                <h4><span class="light">Oshit</span> Sutra Dar</h4>
                                <h6 class="move-title-up">Full Site Develope</h6>
                                <p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet inteum ligula placerat. Maecenas auctor, sem nec eleifend blandit. Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="span4">
                                <blockquote>
                                    <i class="icon-quote-left icon-5x"></i>
                                    <p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre. Dec lobortis dui sagittis, ultrices nuncre. Lorem ipsum dolor sit amet, coetur adipiscing elit.</p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="row-fluid push-down-20" id="primoz">
                            <div class="span4">
                                <blockquote>
                                    <i class="icon-quote-left icon-5x"></i>
                                    <p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre. Dec lobortis dui sagittis, ultrices nuncre. Lorem ipsum dolor sit amet, coetur adipiscing elit.</p>
                                </blockquote>
                            </div>
                            <div class="span4">
                                <h4><span class="light">Bappy</span> Sutra Dar</h4>
                                <h6 class="move-title-up">Full Site Develope</h6>
                                <p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet inteum ligula placerat. Maecenas auctor, sem nec eleifend blandit. Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="span4">
                                <a href="#"><img src="{{ asset('assets/images/dummy/about-us/profile-2.jpg')}}" alt="person" width="550" height="660"/></a>
                            </div>
                        </div>

                        {{--<div class="row-fluid push-down-20" id="ana">--}}
                            {{--<div class="span4">--}}
                                {{--<a href="#"><img src="{{ asset('assets/images/dummy/about-us/profile-4.jpg')}}" alt="person" width="550" height="660"/></a>--}}
                            {{--</div>--}}
                            {{--<div class="span4">--}}
                                {{--<h4><span class="light">Ana</span> Karenina</h4>--}}
                                {{--<h6 class="move-title-up">Customer Relationship</h6>--}}
                                {{--<p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet inteum ligula placerat. Maecenas auctor, sem nec eleifend blandit. Lorem ipsum dolor sit amet.</p>--}}
                            {{--</div>--}}
                            {{--<div class="span4">--}}
                                {{--<blockquote>--}}
                                    {{--<i class="icon-quote-left icon-5x"></i>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre. Dec lobortis dui sagittis, ultrices nuncre. Lorem ipsum dolor sit amet, coetur adipiscing elit.</p>--}}
                                {{--</blockquote>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row-fluid push-down-20" id="andre">--}}
                            {{--<div class="span4">--}}
                                {{--<blockquote>--}}
                                    {{--<i class="icon-quote-left icon-5x"></i>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre. Dec lobortis dui sagittis, ultrices nuncre. Lorem ipsum dolor sit amet, coetur adipiscing elit.</p>--}}
                                {{--</blockquote>--}}
                            {{--</div>--}}
                            {{--<div class="span4">--}}
                                {{--<h4><span class="light">Andre</span> Agassi</h4>--}}
                                {{--<h6 class="move-title-up">Customer Relationship</h6>--}}
                                {{--<p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet inteum ligula placerat. Maecenas auctor, sem nec eleifend blandit. Lorem ipsum dolor sit amet.</p>--}}
                            {{--</div>--}}
                            {{--<div class="span4">--}}
                                {{--<a href="#"><img src="{{ asset('assets/images/dummy/about-us/profile-3.jpg')}}" alt="person" width="550" height="660"/></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </section>
                    <hr/>
                </section>
            </div>
        </div>
    </div>


@endsection