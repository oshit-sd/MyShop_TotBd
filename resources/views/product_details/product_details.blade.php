@extends('layouts.public.public_master')
@section('content')

    @foreach($details as $det)
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
                            <a href="{{ url('/Shop') }}">Shop</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="{{ url('ItemProduct/'.$det->item_name) }}">{{ $det->item_name }}</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="{{ url('/CategoryProduct/'.$det->category) }}">{{ $det->category }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endforeach


    <div class="container">
    @foreach($details as $det)
            <div class="push-up top-equal blocks-spacer">

            <div class="row blocks-spacer">

                <div class="span5">
                    <div class="product-preview">
                        <div class="picture">
                            <img src="{{ $det->img }}" alt style="height: 460px;" id="mainPreviewImg"/>
                        </div>
                        <div class="thumbs clearfix">

                            <div class="thumb active">
                                <a href="#mainPreviewImg"><img src="{{ $det->img }}" alt style="height: 95px;  width: 95px;"/>
                                </a>
                            </div>

                           
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="{{ $det->img }}" alt  style="height: 95px;"/></a>
                            </div>
                            


                        </div>
                    </div>
                </div>


                <div class="span7">
                    <div class="product-title">
                        <h1 class="name" style="border-bottom: 1px solid #CCCCCC;"><span class="light"></span> {{ $det->product_name }}</h1>


                        <div class="meta">
                            <span class="tag" style=" color:#58bab6;">Tk {{ number_format($det->product_price) }}</span>
                            <span class="stock">
                                @if($det->product_stock > 0)
                                    <span class="btn btn-success">In Stock</span>
                                @endif

                                @if($det->product_stock < 1)
                                    <span class="btn btn-danger">Out of Stock</span>
                                @endif
                                    {{--<span class="btn btn-warning">Ask for availability</span>--}}
                            </span>
                        </div>
                    </div>
                    <div class="product-description">
                        <p> {{ $det->details }}</p>
                        <hr/>

                        <?php
//                             session_start();
                             $ses = session_id();
                         ?>

                        <form action="{{ url('/AddShopCart/'.$det->id) }}" method="post" class="form form-inline clearfix">
                            {{ csrf_field() }}
                            <div class="numbered">
                                <input type="hidden" name="stk" value="{{ $det->product_stock }}">
                                <input type="hidden" name="session_id" value="{{ $ses }}">
                                <input type="hidden" name="pro_id" value="{{ $det->id }}">
                                <input type="hidden" name="pro_price" value="{{ $det->product_price }}">
                                <input type="hidden" value="0" name="total">
                                <input type="hidden" name="pro_name" value="{{ $det->product_name }}">
                                <input type="hidden" name="cate" value="{{ $det->category }}">
                                <input type="text" name="quantity" value="1" class="tiny-size"  maxlength="2"/>
                                <span class="clickable add-one icon-plus-sign-alt"></span>
                                <span class="clickable remove-one icon-minus-sign-alt"></span>
                            </div>
                            &nbsp;
                            @if(isset($det->red) == 'Red'or
                               isset($det->green) == 'Green' or
                               isset($det->blue) == 'Blue' or
                               isset($det->black) == 'Black' or
                               isset($det->pink) == 'Pink'or
                               isset($det->purple) == 'Purple' or
                               isset($det->orange) == 'Orange' or
                               isset($det->white) == 'White' or
                               isset($det->yellow) == 'Yellow'
                               )
                            <select name="color" class="span2" required>
                                <option value="" >Select Color...</option>
                                    @if(isset($det->red) == 'Red')
                                        <option>Red</option>
                                    @endif
                                    @if(isset($det->green) == 'Green')
                                        <option>Green</option>
                                    @endif
                                    @if(isset($det->blue) == 'Blue')
                                        <option>Blue</option>
                                    @endif
                                    @if(isset($det->black) == 'Black')
                                        <option>Black</option>
                                    @endif
                                    @if(isset($det->pink) == 'Pink')
                                        <option>Pink</option>
                                    @endif
                                    @if(isset($det->purple) == 'Purple')
                                        <option>Purple</option>
                                    @endif
                                    @if(isset($det->orange) == 'Orange')
                                        <option>Orange</option>
                                    @endif
                                    @if(isset($det->white) == 'White')
                                        <option>White</option>
                                    @endif
                                    @if(isset($det->yellow) == 'Yellow')
                                        <option>Yellow</option>
                                    @endif
                            </select>
                            @endif
                            &nbsp;
                            @if(isset($det->xsmall) == 'XS' or
                                isset($det->small) == 'S' or
                                isset($det->medium) == 'M' or
                                isset($det->large) == 'L' or
                                isset($det->elarge) == 'XL' or
                                isset($det->huge) == 'XXL' or
                                isset($det->s28) == 28 or
                                isset($det->s29) == 29 or
                                isset($det->s30) == 30 or
                                isset($det->s31) == 31 or
                                isset($det->s32) == 32
                                )

                            <select name="size" class="span2" required>
                                <option value="" >Select Size...</option>
                                @if(isset($det->xsmall) == 'XS')
                                    <option value="XS">Extra Small (XS)</option>
                                @endif
                                @if(isset($det->small) == 'S')
                                    <option value="S">Small (S)</option>
                                @endif
                                @if(isset($det->medium) == 'M')
                                    <option value="M">Medium (M)</option>
                                @endif
                                @if(isset($det->large) == 'L')
                                    <option value="L">Large (L)</option>
                                @endif
                                @if(isset($det->elarge) == 'XL')
                                    <option value="Xl">Extra Large (XL)</option>
                                @endif
                                @if(isset($det->huge) == 'XXL')
                                    <option value="XXL">Huge (XXL)</option>
                                @endif
                                @if(isset($det->s28) == 28)
                                    <option value="28">S-28</option>
                                @endif
                                @if(isset($det->s29) == 29)
                                    <option value="28">S-29</option>
                                @endif
                                @if(isset($det->s30) == 30)
                                    <option value="28">S-30</option>
                                @endif
                                @if(isset($det->s31) == 31)
                                    <option value="28">S-31</option>
                                @endif
                                @if(isset($det->s32) == 32)
                                    <option value="28">S-32</option>
                                @endif
                            </select>
                            @endif


                            @if(isset($quans) > 0)
                                @foreach($quans as $quan)
                                    {{ $quans }}
                                @endforeach
                            @endif

                            <button class="btn btn-danger pull-right"><i class="icon-shopping-cart"></i> &nbsp; Add To Cart</button>
                        </form>
                        <hr/>



                        <div class="share-item push-down-20">
                            <div class="row-fluid">
                                <div class="span5">
                                    Share this item with friends:
                                </div>
                                <div class="span7">
                                    <div class="social-networks">

                                        <div class="addthis_toolbox addthis_default_style ">
                                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                            <a class="addthis_button_tweet"></a>
                                            <a class="addthis_button_pinterest_pinit"></a>
                                            <a class="addthis_counter addthis_pill_style"></a>
                                        </div>
                                        <script type="text/javascript" src="{{ asset('assets/s7.addthis.com/js/300/addthis_widget.js#pubid=xa-517459541beb3977') }}"></script>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="store-buttons">
                            <i class="icon-heart"></i> <a href="#">Add to a wishlist</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                            <i class="icon-exchange"></i> <a href="#">Add to compare</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                            <i class="icon-envelope-alt"></i> <a href="#">Email to a friend</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="span12">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab-1" data-toggle="tab">Details</a>
                        </li>
                        <li>
                            <a href="#tab-2" data-toggle="tab">SIZING CHART</a>
                        </li>
                        <li>
                            <a href="#tab-3" data-toggle="tab">COMMENTS</a>
                        </li>
                        <li>
                            <a href="#tab-4" data-toggle="tab">SHIPPING DETAILS</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="fade in tab-pane active" id="tab-1">
                            {{ $det->details }}
                        </div>
                        <div class="fade tab-pane" id="tab-2">
                            <p>
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                            </p>
                        </div>
                        <div class="fade tab-pane" id="tab-3">
                            <p>
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
                            </p>
                        </div>
                        <div class="fade tab-pane" id="tab-4">
                            <p>
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr. Another text here ...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>



    <div class="boxed-area no-bottom">
        <div class="container">



            <div class="row">
                <div class="span12">
                    <div class="main-titles lined">
                        <h2 class="title"><span class="light">Related</span> Products</h2>
                    </div>
                </div>
            </div>



            <div class="row popup-products">

                @foreach($relPro as $rp)
                <div class="span3">
                    <div class="product" style="border: 1px solid #d8d8d8; background-color: #fff;">
                        {{--<div class="product-inner">--}}
                            <div class="product-img">
                                <div class="picture" style="height: 280px;">
                                    <a href="{{ url('/Products/'.$rp->id.'/'.$rp->category) }}"><img src="{{ $rp->img }}" alt style="height: 280px;"/></a>
                                    <div class="img-overlay">
                                        <a class="btn more btn-primary" href="{{ url('/Products/'.$rp->id.'/'.$rp->category) }}">More</a>
                                        <a href="{{ url('/Products/'.$rp->id.'/'.$rp->category) }}" class="btn buy btn-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title" style="text-align: center;border-bottom: 1px solid #e8e8e8;">
                                    {{--<span class="striked">$32</span>--}}
                                    <span class="red-clr" style=" color: #58bab6;">Tk {{ number_format($rp->product_price) }}</span>
                                </h4>
                                <h5 class="no-margin" style="text-align: center; font-size: 13px;">{{ $rp->product_name }}</h5>
                            </div>
                            <p class="desc"  style=" height:47px; padding-right: 10px; padding-left: 10px;">
                                {{ substr($rp->details, 0, 67)}}....
                            </p>
                        {{--</div>--}}
                    </div>
                </div>
                 @endforeach
            </div>
        </div>
    </div>




@endsection