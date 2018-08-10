
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <ul>
@foreach($slider as $sl)

            <li data-transition="premium-random" data-slotamount="3">
                <img src="{{ $sl->img }}" alt="slider img" width="1400" height="377"/>

                <div class="caption lfl str" data-x="400" data-y="20" data-speed="10000" data-start="1000" data-easing="linear">
                    <img src="{{ asset('slider_img/plane.png') }}" alt="aircraft" width="117" height="28"/>
                </div>

                @if(!empty($sl->slider_title1))
                <div class="caption lfl big_theme" data-x="120" data-y="120" data-speed="1000" data-start="500" data-easing="easeInOutBack">
                    {{ $sl->slider_title1 }}
                </div>
                @endif

                @if(!empty($sl->slider_title2))
                <div class="caption lfl small_theme" data-x="120" data-y="190" data-speed="1000" data-start="700" data-easing="easeInOutBack">
                    {{ $sl->slider_title2 }}
                </div>
                @endif
                {{--<a href="icons.html" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="260" data-speed="1000" data-start="900" data-easing="easeInOutBack">--}}
                    {{--Buy Now...--}}
                {{--</a>--}}
            </li>
@endforeach
        </ul>
        <div class="tp-bannertimer"></div>
    </div>



    {{--<div id="sliderRevLeft"><i class="icon-chevron-left"></i></div>--}}
    {{--<div id="sliderRevRight"><i class="icon-chevron-right"></i></div>--}}
</div>

