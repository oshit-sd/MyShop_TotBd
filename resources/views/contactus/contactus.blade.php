
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
                            <a href="{{ url('/Contact-Us') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="push-up top-equal blocks-spacer-last">
            <div class="row">



                <div class="span12">
                    <div class="title-area">
                        <h1 class="inline"><span class="light">Contact</span> Us</h1>
                    </div>
                </div>



                <section class="span8 single single-page">



                    <article class="post">
                        <div class="post-inner">
                            <p>
                                The simple contact form below comes packed within this theme. To use the inbuilt form, simply create a page and use the page template “Contact”. The form will automatically insert below any page content. The form includes jQuery validation to enhance user experience and the recipient email can be configured from the theme options.
                            </p>
                        </div>
                    </article>
                    <hr/>



                    <section class="contact-form-container">
                        <h3 class="push-down-25"><span class="light">Send</span> a Message</h3>
                        <form action="{{ url('/Send_message') }}" method="POST" class="form form-inline form-contact" id="commentform">
                                {{  csrf_field() }}
                            <p class="push-down-20">
                                <input type="text" aria-required="true" tabindex="1" size="30" value id="author" name="name" required>
                                <label for="author">Name<span class="red-clr bold">*</span></label>
                            </p>
                            <p class="push-down-20">
                                <input type="email" aria-required="true" tabindex="2" size="30" value id="email" name="email" required>
                                <label for="email">Mail<span class="red-clr bold">*</span></label>
                            </p>
                            <p class="push-down-20">
                                <input type="text" tabindex="3" size="30" value id="phone" name="phone" required>
                                <label for="url">Phone<span class="red-clr bold">*</span></label>
                            </p>
                            <p class="push-down-20">
                                <textarea class="input-block-level" tabindex="4" rows="7" cols="70" id="comment" name="message" placeholder="Your Message goes here ..." required></textarea>
                            </p>
                            <p>
                                <button class="btn btn-primary bold" type="submit" tabindex="5" id="submit">SEND EMAIL</button>
                            </p>
                        </form>
                    </section>
                    <hr/>



                    <article class="company-info">
                        <div class="row">
                            <div class="span3">
                                <h3 class="push-down-30"><span class="light">Company</span> Info</h3>
                                <p>
                                    <strong class="opensans dark-clr">MyShop COMPANY LTD.</strong>
                                    {{--<br/>--}}
                                    {{--Panthpoth.--}}
                                    <br/>
                                    Kawran Bazar,Garden road.
                                    <br/>
                                    Dhaka.
                                </p>
                                <p>
                                    <strong class="opensans dark-clr">Phone number:</strong> 01800000000
                                    <br/>
                                    {{--<strong class="opensans dark-clr">Fax:</strong> 00386 31 567 538--}}
                                    {{--<br/>--}}
                                    <strong class="opensans dark-clr">Mail:</strong> Oshitsd99@gmail.com
                                </p>
                            </div>
                            <div class="span5">
                                <div class="add-googlemap" data-height="205" data-addr="Prešernov Trg, Ljubljana" data-title="Webmarket Business" data-zoom="14" data-type="roadmap"></div>
                            </div>
                        </div>
                    </article>
                </section>



                <aside class="span4">



                    <div class="sidebar-item opening-time" id="opening_time-4">
                        <div class="underlined">
                            <h3><span class="light">Opening</span> Time</h3>
                        </div>
                        <div class="time-table">
                            <dl class="week-day  light-bg">
                                <dt>
                                    Monday
                                </dt>
                                <dd>
                                    9:00 - 10:00
                                </dd>
                            </dl>
                            <dl class="week-day">
                                <dt>
                                    Tuesday
                                </dt>
                                <dd>
                                    9:00 - 10:00
                                </dd>
                            </dl>
                            <dl class="week-day  light-bg">
                                <dt>
                                    Wednesday
                                </dt>
                                <dd>
                                    9:00 - 10:00
                                </dd>
                            </dl>
                            <dl class="week-day">
                                <dt>
                                    Thursday
                                </dt>
                                <dd>
                                    9:00 - 10:00
                                </dd>
                            </dl>
                            <dl class="week-day  light-bg">
                                <dt>
                                    Friday
                                </dt>
                                <dd>
                                    9:00 - 10:00
                                </dd>
                            </dl>
                            <dl class="week-day">
                                <dt>
                                    Saturday
                                </dt>
                                <dd>
                                    9:00 - 10:00
                                </dd>
                            </dl>
                            <dl class="week-day  light-bg today">
                                <dt>
                                    Sunday
                                </dt>
                                <dd>
                                    CLOSED
                                </dd>
                            </dl>
                        </div>
                    </div>



                    {{--<div class="sidebar-item widget_twitter">--}}
                        {{--<div class="underlined">--}}
                            {{--<h3><span class="light">Twitter</span> Feed</h3>--}}
                        {{--</div>--}}
                        {{--<a class="twitter-timeline" href="https://twitter.com/primozcigler" data-widget-id="361435057526800385">Tweets by @primozcigler</a>--}}
                        {{--<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>--}}
                    {{--</div>--}}
                </aside>
            </div>
        </div>
    </div>


@endsection