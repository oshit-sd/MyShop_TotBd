<?php
$ses = session_id();

$sum =  DB::table('shopcarts')->where('session_id', $ses)->sum('total');
$st = $sum + 100;

$data =  DB::table('paymentinfos')->where('ses_id', $ses)->first();

$Item = DB::table('items')->get();

$Cate = DB::table('categores')
    ->join('items','categores.item_id','=','items.id' )
    ->select('categores.*','items.item_name')
//        ->orderBy('ID','DESC')
    ->get();

$MenImgNew = DB::table('products')
    ->join('items','item','=','items.id' )
    ->select('products.*','items.item_name')
    ->where('items.item_name', 'Mens-Clothing')
    ->orderBy('products.id', 'DESC')
    ->limit(1)->get();

$WomenImgNew = DB::table('products')
    ->join('items','item','=','items.id' )
    ->select('products.*','items.item_name')
    ->where('items.item_name', 'Womens-Clothing')
    ->orderBy('products.id', 'DESC')
    ->limit(1)->get();

$FeaPro = DB::table('products')
    ->where('Featured', 'Featured')
    ->orderBy('products.id', 'DESC')
    ->limit(2)
    ->get();

?>





<div class="navbar navbar-static-top" id="stickyNavbar">
    <div class="navbar-inner" style=" ">
        <div class="container" >
            <div class="row">
                <div class="span9">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>



                    <div class="nav-collapse collapse">
                        <ul class="nav" id="mainNavigation" style="color: #fff;">
                            <li class="dropdown active"> <a href="{{ url('/MyShop') }}" class="dropdown-toggle"> Home </a></li>

                            <li class="dropdown dropdown-supermenu">
                                <a href="{{ url('/ItemProduct/Mens-Clothing') }}" class="dropdown-toggle"> Men's <b class="caret"></b> </a>
                                <ul class="dropdown-menu supermenu accepts-5">
                                    <li class="row">
                                        <div class="span2">
                                            <ul class="nav nav-pills nav-stacked">
                                                @foreach($Cate as $m)
                                                    @if($m->item_name== 'Mens-Clothing')
                                                        <li><a href="{{ url('/CategoryProduct/'.$m->category) }}">{{ $m->category }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="span3">
                                            @foreach($MenImgNew as $mf)
                                                @if($mf->item_name == 'Mens-Clothing')
                                                    <div class="embed-container" style="width: 300px;  height: 1px;">
                                                        <a href="{{ url('/Products/'.$mf->id.'/'.$mf->category) }}">
                                                            <img  src="{{ $mf->img }}" style=" height: 150px; width: 300px;">
                                                        </a>
                                                    </div>
                                                    <h5><span class="light">New</span> {{ $mf->category }}</h5>
                                                @endif
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-supermenu">
                                <a href="{{ url('/ItemProduct/Womens-Clothing') }}" class="dropdown-toggle"> Women's <b class="caret"></b> </a>
                                <ul class="dropdown-menu supermenu accepts-5">
                                    <li class="row">
                                        <div class="span2">
                                            <ul class="nav nav-pills nav-stacked">
                                                @foreach($Cate as $wm)
                                                    @if($wm->item_name == 'Womens-Clothing')
                                                        <li><a href="{{ url('/CategoryProduct/'.$wm->category) }}">{{ $wm->category }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="span3">
                                            @foreach($WomenImgNew as $wmf)
                                                @if($wmf->item_name == 'Womens-Clothing')
                                                    <div class="embed-container" style="width: 300px; height: 1px;">
                                                        <a href="{{ url('/Products/'.$wmf->id.'/'.$wmf->category) }}">
                                                            <img  src="{{ $wmf->img }}" style="height: 150px; width: 300px;">
                                                        </a>
                                                    </div>
                                                    <h5><span class="light">New</span> {{ $wmf->category }}</h5>
                                                @endif
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                            </li>


                            <li class="dropdown dropdown-megamenu">
                                <a href="{{ url('/Shop') }}" class="dropdown-toggle"> SHOP NOW <b class="caret"></b> </a>
                                <ul class="dropdown-menu megamenu container">
                                    <li class="row">
                                        <div class="span3">
                                            <ul class="nav nav-pills nav-stacked">
                                                @foreach($Item as $itm)
                                                    <li><a href="{{ url('/ItemProduct/'.$itm->item_name ) }}">{{ $itm->item_name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="span2">
                                            <ul class="nav nav-pills nav-stacked">
                                                @foreach($Item as $itm)
                                                    @if($itm->item_name == 'Kids-Zone')
                                                        <li><a href="{{ url('/ItemProduct/'.$itm->item_name ) }}">{{ $itm->item_name }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            <ul class="nav unstyled">
                                                @foreach($Cate as $ct)
                                                    @if($ct->item_name == 'Kids-Zone')
                                                        <li><a href="{{ url('/CategoryProduct/'.$ct->category) }}">{{ $ct->category }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>

                                            <ul class="nav nav-pills nav-stacked">
                                                @foreach($Item as $itm)
                                                    @if($itm->item_name == 'Gents-Watch')
                                                        <li><a href="{{ url('/ItemProduct/'.$itm->item_name ) }}">{{ $itm->item_name }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            <ul class="nav unstyled">
                                                @foreach($Cate as $ct)
                                                    @if($ct->item_name == 'Gents-Watch')
                                                        <li><a href="{{ url('/CategoryProduct/'.$ct->category) }}">{{ $ct->category }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="span2">
                                            <ul class="nav nav-pills nav-stacked">
                                                @foreach($Item as $itm)
                                                    @if($itm->item_name == 'Jewelry-Collection')
                                                        <li><a href="{{ url('/ItemProduct/'.$itm->item_name ) }}">{{ $itm->item_name }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            <ul class="nav unstyled">
                                                @foreach($Cate as $ct)
                                                    @if($ct->item_name == 'Jewelry-Collection')
                                                        <li><a href="{{ url('/CategoryProduct/'.$ct->category) }}">{{ $ct->category }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>

                                            <ul class="nav nav-pills nav-stacked">
                                                @foreach($Item as $itm)
                                                    @if($itm->item_name == 'Ladies-Watch')
                                                        <li><a href="{{ url('/ItemProduct/'.$itm->item_name ) }}">{{ $itm->item_name }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            <ul class="nav unstyled">
                                                @foreach($Cate as $ct)
                                                    @if($ct->item_name == 'Ladies-Watch')
                                                        <li><a href="{{ url('/CategoryProduct/'.$ct->category) }}">{{ $ct->category }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="span2">
                                            <ul class="nav nav-pills nav-stacked">
                                                @foreach($Item as $itm)
                                                    @if($itm->item_name == 'Mobile-Gadget')
                                                        <li><a href="{{ url('/ItemProduct/'.$itm->item_name ) }}">{{ $itm->item_name }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            <ul class="nav unstyled">
                                                @foreach($Cate as $ct)
                                                    @if($ct->item_name == 'Mobile-Gadget')
                                                        <li><a href="{{ url('/CategoryProduct/'.$ct->category) }}">{{ $ct->category }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>

                                            <ul class="nav nav-pills nav-stacked">
                                                @foreach($Item as $itm)
                                                    @if($itm->item_name == 'Computer & Laptop')
                                                        <li><a href="{{ url('/ItemProduct/'.$itm->item_name ) }}">{{ $itm->item_name }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            <ul class="nav unstyled">
                                                @foreach($Cate as $ct)
                                                    @if($ct->item_name == 'Computer & Laptop')
                                                        <li><a href="{{ url('/CategoryProduct/'.$ct->category) }}">{{ $ct->category }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="span3">
                                            @foreach($FeaPro as $FP)
                                                {{--@if(isset($FP->featured) == 'Featured')--}}
                                                <a href="{{ url('/Products/'.$FP->id.'/'.$FP->category) }}"><img src="{{ $FP->img }}" alt="woman in red" style="width: 540px; height: 130px; border: 1px solid #d8d8d8;"></a>
                                                <h5 style=" padding-bottom: 10px;"><span class="light">New</span> {{ $FP->category }}</h5>
                                                {{--@endif--}}
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="{{ url('/Shop') }}" class="dropdown-toggle">Categories <b class="caret"></b> </a>
                                <ul class="dropdown-menu" style="width:230px;">
                                    @foreach($Item as $itm)
                                        <li class="dropdown">
                                            <a href="{{ url('/ItemProduct/'.$itm->item_name) }}" class="dropdown-toggle">
                                                <i class="icon-caret-right pull-right visible-desktop"></i>
                                                {{ $itm->item_name }}
                                            </a>

                                            <?php
                                            $Category = DB::table('categores')
                                                ->where('item_id', $itm->id)
//                                            ->orderBy('categores.ID','DESC')
                                                ->get();
                                            ?>
                                            <ul class="dropdown-menu">
                                                @foreach($Category as $cate)
                                                    <li><a href="{{ url('/CategoryProduct/'.$cate->category) }}">{{ $cate->category }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li><a href="{{ url('/About-Us') }}">About Us</a></li>
                            <li><a href="{{ url('/Contact-Us') }}">Contact</a></li>
                        </ul>



                        <form class="navbar-form pull-right" action="{{ url('/SearchResult') }}" method="post">
                            {{ csrf_field() }}
                            <button type="submit"><span class="icon-search"></span></button>
                            <input type="text" required class="span1" name="q" id="navSearchInput">
                            <input type="hidden" class="span1" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>

                <div class="span3">
                    <div class="cart-container" id="cartContainer">
                        <div class="cart">
                            <p class="items">CART
                                <span class="dark-clr">
                                    {{--@if(!isset($data))--}}
                                    ( {{ App\Shopcarts::where('session_id', $ses)->count() }} )
                                    {{--@else--}}
                                    {{--( 0 )--}}
                                    {{--@endif--}}
                                </span>
                            </p>
                            <p class="dark-clr hidden-tablet">
                                {{--@if(!isset($data))--}}
                                @if($st < 101)
                                    00.00
                                @else
                                    {{ $st }}.00
                                @endif
                                {{--@else--}}
                                {{--00.00--}}
                                {{--@endif--}}
                            </p>
                            <a href="{{ url('/checkoutStep1') }}" role="button" data-toggle="modal" class="btn btn-danger">

                                <i class="icon-shopping-cart"></i>
                            </a>
                        </div>

                        <style type="text/css">
                            a.iconCross{
                                color: #f4b5c0;
                            }
                            .iconCross:hover{
                                color: #f4001b;
                            }
                        </style>

                        <div class="open-panel">

                            {{--@if(!isset($data))--}}
                            @foreach($product as $pro)
                                <div class="item-in-cart clearfix">
                                    <div class="image">
                                        <img src="{{ $pro->img }}" style="height: 70px; width: 70px;" width="124" height="124" alt="cart item"/>
                                    </div>

                                    <div class="desc">
                                        <strong><a href="#">{{ $pro->pro_name }}</a></strong>
                                        <span class="light-clr qty">
                                    Qty: {{ $pro->quantity }}
                                            &nbsp;
                                   <a href="{{ url('/RemoveProduct/'.$pro->id) }}" class="iconCross" title="Remove Product"><i style="color:#f4b5c0;" class="fa fa-times-circle fa-lg"></i></a></td>
                                    </span>
                                    </div>
                                    <div class="price">
                                        <strong>{{ $pro->total }}.00</strong>
                                    </div>
                                </div>
                            @endforeach
                            {{--@endif--}}


                            <div class="summary">
                                <div class="line">
                                    <div class="row-fluid">
                                        <div class="span6">Shipping:</div>
                                        <div class="span6 align-right">
                                            {{--@if(!isset($data))--}}
                                            @if($st < 101)
                                                00.00
                                            @else
                                                100.00
                                            @endif

                                            {{--00.00--}}
                                            {{--@endif--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="line">
                                    <div class="row-fluid">
                                        <div class="span6">Subtotal:</div>
                                        <div class="span6 align-right size-16">
                                            {{--@if(!isset($data))--}}
                                            @if($st < 101)
                                                00.00
                                            @else
                                                {{ $st }}.00
                                            @endif
                                            {{--@else--}}
                                            {{--00.00--}}
                                            {{--@endif--}}
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="proceed">
                                <a href="#registerModal" role="button" data-toggle="modal" class="btn btn-danger pull-right bold higher">CHECKOUT <i class="icon-shopping-cart"></i></a>
                                <small>Shipping costs are calculated based on location. <a href="#">More information</a></small>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
