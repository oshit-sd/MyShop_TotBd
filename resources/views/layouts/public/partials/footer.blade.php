<?php
    $item = DB::table('items')->limit(8)->get();

    $Cate = DB::table('categores')
        ->join('items','categores.item_id','=','items.id' )
        ->select('categores.*','items.item_name')
        ->orderBy('ID','DESC')
        ->get();

?>


<style type="text/css">
    a.hover:hover{
       padding-left: 3px;
        -webkit-transition: all 0.32s ease-out;
        -moz-transition: all 0.30s ease-out;
        transition: all 0.30s ease-out;
    }

</style>
<footer>
    <div class="foot-light">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <h2 class="pacifico">MyShop &nbsp; <img src="{{ asset('assets/images/webmarket.png') }}" alt="Webmarket Cart" class="align-baseline"/></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt vestibulum risus et gravida. Etiam vel augue ligula, blandit malesuada nisi. Quisque a augue nisi. Nullam interdum convallis </p>
                </div>
                {{--<div class="span4">--}}
                    {{--<div class="main-titles lined">--}}
                        {{--<h3 class="title">Facebook</h3>--}}
                    {{--</div>--}}
                    {{--<div class="bordered">--}}
                        {{--<div class="fill-iframe">--}}
                            {{--<div class="fb-like-box" data-href="https://www.facebook.com/ProteusNet" data-width="292" data-height="200" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="span4">--}}
                    {{--<div class="main-titles lined">--}}
                        {{--<h3 class="title"><span class="light">Newsletters</span> Signup</h3>--}}
                    {{--</div>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
                        {{--Aliquam tincidunt vestibulum risus et gravida.</p>--}}

                    {{--<div id="mc_embed_signup">--}}
                        {{--<form action="http://proteusthemes.us4.list-manage1.com/subscribe/post?u=ea0786485977f5ec8c9283d5c&amp;id=5dad3f35e9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form form-inline" target="_blank" novalidate>--}}
                            {{--<div class="mc-field-group">--}}
                                {{--<input type="email" value placeholder="Enter your e-mail address" name="EMAIL" class="required email" id="mce-EMAIL">--}}
                                {{--<input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">--}}
                            {{--</div>--}}
                            {{--<div id="mce-responses" class="clear">--}}
                                {{--<div class="response" id="mce-error-response" style="display:none"></div>--}}
                                {{--<div class="response" id="mce-success-response" style="display:none"></div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}

                {{--</div>--}}
            </div>
        </div>
    </div>



    <div class="foot-dark">
        <div class="container">
            <div class="row">

                @foreach($item as $itm)

                <div class="span3" style=" ">
                    <div class="main-titles lined">
                        <a href="{{ url('/ItemProduct/'.$itm->item_name) }}">
                            <h3 class="title">{{ $itm->item_name }}</h3>
                        </a>
                    </div>
                    <?php
                    $Category = DB::table('categores')
                        ->where('item_id', $itm->id)
                        ->orderBy('categores.ID','DESC')
                        ->limit(5)
                        ->get();
                    ?>
                    <ul class="nav bold">
                        @foreach($Category as $cate)
                            <li  style="border-bottom: 1px solid #666;"><a href="{{ url('/CategoryProduct/'.$cate->category) }}" class="hover">{{ $cate->category }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>



    <div class="foot-last">
        <a href="#" id="toTheTop">
            <span class="icon-chevron-up"></span>
        </a>
        <div class="container">
            <div class="row">
                <div class="span6">
                    &copy; Copyright 2017.All Rights Reserved by <a target="_blank" href="#">Oshit Sutra Dar</a>.
                </div>
                <div class="span6">
                    {{--<div class="pull-right">Webmarket HTML Template by <a href="http://www.proteusthemes.com/">ProteusThemes</a></div>--}}
                </div>
            </div>
        </div>
    </div>
</footer>
