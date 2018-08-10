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
                            <a href="{{ url('/Shop') }}">Shop</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li><li>
                            <a href="{{ url('/Featured') }}">New</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container" >
        <div class="push-up blocks-spacer" style="background-color: #f8f8f8;">
            <div class="row" >

                <aside class="span3 left-sidebar" id="tourStep1">
                    <div class="sidebar-item sidebar-filters" id="sidebarFilters">

                        <div class="underlined">
                            <h3><span class="light">Shop</span> by filters</h3>
                        </div>

                        <div class="accordion-group" id="tourStep2">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" href="#filterOne">Categories <b class="caret"></b></a>
                            </div>
                            <div id="filterOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    @foreach($cateGory as $cate)
                                        <a href="#" data-target=".filter--{{ $cate->category }}" class="selectable"><i class="box"></i> {{ $cate->category }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">Price <b class="caret"></b></a>
                            </div>
                            <div id="filterPrices" class="accordion-body collapse">
                                <div class="accordion-inner with-slider">
                                    <div class="jqueryui-slider-container">
                                        <div id="pricesRange"></div>
                                    </div>
                                    <input type="text" data-initial="457" class="max-val pull-right" disabled/>
                                    <input type="text" data-initial="99" class="min-val" disabled/>
                                </div>
                            </div>
                        </div>



                        <div class="accordion-group" id="tourStep3">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterTwo">Size <b class="caret"></b></a>
                            </div>
                            <div id="filterTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <a href="#" data-target="XS" data-type="size" class="selectable detailed"><i class="box"></i> XS</a>
                                    <a href="#" data-target="S" data-type="size" class="selectable detailed"><i class="box"></i> S</a>
                                    <a href="#" data-target="M" data-type="size" class="selectable detailed"><i class="box"></i> M</a>
                                    <a href="#" data-target="L" data-type="size" class="selectable detailed"><i class="box"></i> L</a>
                                    <a href="#" data-target="XL" data-type="size" class="selectable detailed"><i class="box"></i> XL</a>
                                    <a href="#" data-target="XXL" data-type="size" class="selectable detailed"><i class="box"></i> XXL</a>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-group" id="tourStep3">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterThree">Color <b class="caret"></b></a>
                            </div>
                            <div id="filterThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <a href="#" data-target="Red" data-type="color" class="selectable detailed"><i class="box"></i> Red</a>
                                    <a href="#" data-target="Green" data-type="color" class="selectable detailed"><i class="box"></i> Green</a>
                                    <a href="#" data-target="Blue" data-type="color" class="selectable detailed"><i class="box"></i> Blue</a>
                                    <a href="#" data-target="Black" data-type="color" class="selectable detailed"><i class="box"></i> Black</a>
                                    <a href="#" data-target="Pink" data-type="color" class="selectable detailed"><i class="box"></i> Pink</a>
                                    <a href="#" data-target="Purple" data-type="color" class="selectable detailed"><i class="box"></i> Purple</a>
                                    <a href="#" data-target="Orange" data-type="color" class="selectable detailed"><i class="box"></i> Orange</a>
                                    <a href="#" data-target="White" data-type="color" class="selectable detailed"><i class="box"></i> White</a>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterFour">Brand <b class="caret"></b></a>
                            </div>
                            <div id="filterFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    @foreach($brands as $brand)
                                        <a href="#" data-target="{{ $brand->brand }}" data-type="brand" class="selectable detailed"><i class="box"></i> {{ $brand->brand }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <a href="#" class="remove-filter" id="removeFilters"><span class="icon-ban-circle"></span> Remove All Filters</a>
                    </div>
                </aside>



                <section class="span9">



                    <div class="underlined push-down-20">
                        <div class="row">
                            <div class="span4">
                                <h3><span class="light">All</span> New Products</h3>
                            </div>
                            <div class="span5 align-right sm-align-left">
                                <div class="form-inline sorting-by" id="tourStep4">
                                    <label for="isotopeSorting" class="black-clr">Sort:</label>
                                    <select id="isotopeSorting" class="span3">
                                        <option value="{&quot;sortBy&quot;:&quot;price&quot;, &quot;sortAscending&quot;:&quot;true&quot;}">By Price (Low to High) &uarr;</option>
                                        <option value="{&quot;sortBy&quot;:&quot;price&quot;, &quot;sortAscending&quot;:&quot;false&quot;}">By Price (High to Low) &darr;</option>
                                        <option value="{&quot;sortBy&quot;:&quot;name&quot;, &quot;sortAscending&quot;:&quot;true&quot;}">By Name (Low to High) &uarr;</option>
                                        <option value="{&quot;sortBy&quot;:&quot;name&quot;, &quot;sortAscending&quot;:&quot;false&quot;}">By Name (High to Low) &darr;</option>
                                        <option value="{&quot;sortBy&quot;:&quot;popularity&quot;, &quot;sortAscending&quot;:&quot;true&quot;}">By Popularity (Low to High) &uarr;</option>
                                        <option value="{&quot;sortBy&quot;:&quot;popularity&quot;, &quot;sortAscending&quot;:&quot;false&quot;}">By Popularity (High to Low) &darr;</option>
                                    </select>
                                </div>
                                <div class="view-switch">
                                    <a href="#" class="btn btn-primary"><i class="icon-th"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row popup-products">
                        <div id="isotopeContainer" class="isotope-container" >

                            @foreach($allPro as $singlePro)

                                <div class="span3 isotope--target filter--{{ $singlePro->category }}"
                                     data-price="{{ $singlePro->product_price }}"
                                     data-popularity="3"
                                     data-size="{{ $singlePro->xsmall }}|{{ $singlePro->small }}|{{ $singlePro->medium }}|{{ $singlePro->large }}|{{ $singlePro->elarge }}|{{ $singlePro->huge }}"
                                     data-color="{{ $singlePro->red }}|{{ $singlePro->green }}|{{ $singlePro->blue }}|{{ $singlePro->black }}|{{ $singlePro->pink }}|{{ $singlePro->purple }}|{{ $singlePro->orange }}|{{ $singlePro->white }}|{{ $singlePro->yellow }}"
                                     data-brand="{{ $singlePro->brand }}">


                                <div class="product" style="border: 1px solid #d8d8d8; background-color: #fff;">
                                    {{--<div class="product-inner">--}}
                                        <div class="product-img">
                                            <div class="picture" style="height: 280px;">
                                                <a href="{{ url('/Products/'.$singlePro->id.'/'.$singlePro->category) }}"><img style=" height: 280px" alt src="{{ $singlePro->img }}"/></a>
                                                <div class="img-overlay">
                                                    <a class="btn more btn-primary" href="{{ url('/Products/'.$singlePro->id.'/'.$singlePro->category) }}">DETAILS</a>
                                                    <a class="btn buy btn-danger" href="{{ url('/Products/'.$singlePro->id.'/'.$singlePro->category) }}">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                            <h4 class="title" style="text-align: center;border-bottom: 1px solid #f4f4f4; color: #58bab6;">Tk {{ number_format($singlePro->product_price) }}</h4>
                                            <h5 class="no-margin isotope--title"  style="text-align: center; font-size: 13px;padding-top: 10px;">{{ $singlePro->product_name }}</h5>
                                        </div>
                                        <div class="row-fluid hidden-line" style=" padding-left: 10px; padding-bottom: 10px;">
                                            <div class="span6">
                                                <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                                <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                            </div>
                                            {{--<div class="span6 align-right">--}}
                                                {{--<span class="icon-star stars-clr"></span>--}}
                                                {{--<span class="icon-star stars-clr"></span>--}}
                                                {{--<span class="icon-star stars-clr"></span>--}}
                                                {{--<span class="icon-star"></span>--}}
                                                {{--<span class="icon-star"></span>--}}
                                            {{--</div>--}}
                                        </div>
                                    {{--</div>--}}
                                </div>
                            </div>

                             @endforeach
                        </div>
                    </div>
                    <hr/>
                </section>
            </div>
        </div>
    </div>



@endsection