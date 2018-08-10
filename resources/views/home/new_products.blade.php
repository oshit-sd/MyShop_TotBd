<div class="boxed-area blocks-spacer">
    <div class="container">

        <div class="row">
            <div class="span12">
                <div class="main-titles lined">
                    <h2 class="title"><span class="light">New</span> Products in the Shop</h2>
                    <div class="arrows">
                        <a href="{{ url('/New') }}" class="btn btn-primary" style="font-size: 14px; padding: 7px;">More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row popup-products blocks-spacer">


            @foreach($newPro as $new)
            <div class="span3">
                <div class="product" style="border: 1px solid #ddd;">
                    {{--<div class="product-inner">--}}
                        <div class="product-img">
                            <div class="picture" style="height: 280px;">
                                <a href="{{ url('/Products/'.$new->id.'/'.$new->category) }}"><img src="{{ $new->img }}" alt style="height: 280px;"/></a>
                                <div class="img-overlay">
                                    <a href="{{ url('/CategoryProduct/'.$new->category) }}" class="btn more btn-primary">More</a>
                                    <a href="{{ url('/Products/'.$new->id.'/'.$new->category) }}" class="btn buy btn-danger">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h4 class="title"  style="text-align: center; border-bottom: 1px solid #ddd;  color:#58bab6;">Tk {{ number_format($new->product_price) }}</h4>
                            <h5 class="no-margin" style="text-align: center; font-size: 13px; padding-top: 10px;"><a href="{{ url('/Products/'.$new->id.'/'.$new->category) }}">{{ $new->product_name }}</a></h5>
                        </div>
                        <p class="desc" style=" height:28px; padding-right: 10px; padding-left: 10px;">
                            {{ substr($new->details, 0, 62)}}....
                        </p>
                        <div class="row-fluid hidden-line" style=" padding-left: 10px; padding-bottom: 10px;">
                            <div class="span6">
                                <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                            </div>
                        </div>
                    {{--</div>--}}
                </div>
            </div>

            @endforeach

            <div class="clearfix"></div>

        </div>
    </div>
</div>

