
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="push-up over-slider blocks-spacer">

                <div class="row">
                    <div class="span4">
                        <a href="#" class="btn btn-block banner">
                            <span class="title"><span class="light">SUMMER</span> SALE</span>
                            <em>up to 60% off on all shoes</em>
                        </a>
                    </div>
                    <div class="span4">
                        <a href="#" class="btn btn-block colored banner">
                            <span class="title"><span class="light">FREE</span> SHIPPING</span>
                            <em>on orders over $69</em>
                        </a>
                    </div>
                    <div class="span4">
                        <a href="#" class="btn btn-block banner">
                            <span class="title"><span class="light">NEW</span> PRODUCTS</span>
                            <em>for running on lorem ipsum dolor</em>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="row featured-items blocks-spacer">
        <div class="span12">



            <div class="main-titles lined">
                <h2 class="title"><span class="light">Featured</span> Products</h2>
                <div class="arrows">
                    <a href="{{ url('/Featured') }}" class="btn btn-primary" style="font-size: 14px; padding: 7px;">More</a>
                </div>
            </div>
        </div>
        <div class="span12">



            <div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">
                <div class="slide">
                    <div class="row" >


                    @foreach($featured as $fed)
                        <div class="span4" style=" background-color: #f8f8f8; margin-bottom: 20px;">
                            <div class="product">
                                <div class="product-img featured">
                                    <div class="picture" style="height: 280px;">
                                        <a href="{{ url('/Products/'.$fed->id.'/'.$fed->category) }}"><img src="{{ $fed->img }}" alt style="height: 280px;"/></a>
                                        <div class="img-overlay">
                                            <a href="{{ url('/CategoryProduct/'.$fed->category) }}" class="btn more btn-primary">More</a>
                                            <a href="{{ url('/Products/'.$fed->id.'/'.$fed->category) }}" class="btn buy btn-danger">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-titles">
                                    <h4 class="title"  style="text-align: center; border-bottom: 1px solid #e8e8e8; color:#58bab6;">Tk {{ number_format($fed->product_price) }}</h4>
                                    <h5 class="no-margin" style="text-align: center; font-size: 13px; padding-top: 10px;"><a href="{{ url('/Products/'.$fed->id.'/'.$fed->category) }}">{{ $fed->product_name }}</a></h5>
                                </div>
                                <p class="desc" style="height:57px; padding-right: 10px; padding-left: 10px;">
                                    {{ substr($fed->details, 0, 70)}}....
                                </p>
                            </div>
                        </div>
                    @endforeach





                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

