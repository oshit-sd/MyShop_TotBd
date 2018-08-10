

@include('layouts.public.partials.checkout_head')
<body class=" checkout-page">
<div id="voucher">
<div class="master-wrapper">
    <div class="container">
        <div class="row">
            <section class="span12">
                <div class="checkout-container">
                    <div class="row">
                        <div class="span10 offset1">

                            <header>
                                <div class="row">
                                    <div class="span2">

                                    </div>
                                    <div class="span6">
                                        <div class="center-align">
                                            <h1> Product Voucher</h1>
                                        </div>
                                    </div>
                                    <div class="span2">

                                    </div>
                                </div>
                            </header>


                            <?php
                            $ses = session_id();

                            $sum =  DB::table('shopcarts')->where('session_id', $ses)->sum('total');
                            $st = $sum + 100;
                            ?>

                            <table class="table table-items">
                                <thead>
                                <tr>
                                    <th colspan="2">Item</th>
                                    <th><div class="align-center">Quantity</div></th>
                                    <th><div class="align-right">Price</div></th>
                                    <th><div class="align-right">Total</div></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $pro)
                                    <tr>
                                        <td class="image"><img src="{{ $pro->img }}" alt style="height: 75px; width: 75px;"/></td>
                                        <td class="desc">{{ $pro->pro_name }}</td>
                                        <td class="qty">{{ $pro->quantity }} </td>
                                        <td class="price">{{ number_format($pro->pro_price) }}</td>
                                        <td class="price">{{ number_format($pro->total) }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3" rowspan="2">
                                        &nbsp;
                                    </td>
                                    <td class="stronger">Shipping:</td>
                                    <td class="stronger"><div class="align-right">100</div></td>
                                </tr>
                                <tr>
                                    <td class="stronger">Subtotal:</td>
                                    <td class="stronger">
                                        <div class="size-16 align-right">
                                            @if($st < 101)
                                                00
                                            @else
                                                {{ number_format($st) }}
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</div>

<div style="border: #507ad4; width: 72%; height: 40px; margin: auto; background-color: #ddd; text-align: right;">
    <p class="right-align">
        <a href="{{ url('/BackVoucher') }}" class="btn btn-primary higher bold">Back</a>
        <button onClick="printContent('voucher')" class="btn btn-primary higher bold">Print</button>
    </p>
</div>

@include('layouts.public.partials.checkout_footer')


