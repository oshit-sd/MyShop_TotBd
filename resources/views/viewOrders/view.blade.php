
@include('layouts.admin.partials.header_myshop')
<div class="darker-stripe">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ url('/admin') }}">MyShop</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="{{ url('/PendingOrders') }}">Pending Orders</a>
                    </li><li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="{{ url('/ConfirmOrders') }}">Confirm Orders</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="#">Customer Information</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="info">
    <div class="container">
    <div class="push-up blocks-spacer"  style="background-color: #e7f0f0;">
        <div class="row">
            <section class="span12">
                <div class="underlined push-down-20">
                    <h3><span class="light">Customer</span> Information</h3>
                </div>
                @foreach($cusInfo as $cf)
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <tr style="height: 40px;">
                        <td class="price" style=" width: 13%;">Cus-Name :</td>
                        <td class="price" style=" width: 40%;">{{ $cf->name }}</td>
                        <td class="price" style=" width: 13%;">Mobile :</td>
                        <td class="price" style=" width: 40%;">{{ $cf->mobile }}</td>
                    </tr>
                    <tr style="height: 40px;">
                        <td class="price" style=" width: 10%;">Email :</td>
                        <td class="price" style=" width: 40%;">{{ $cf->email }}</td>
                        <td class="price" style=" width: 10%;">Address-1 :</td>
                        <td class="price" style=" width: 40%;">{{ $cf->addr1 }}</td>
                    </tr>
                    <tr style="height: 40px;">
                        <td class="price" style=" width: 10%;">City :</td>
                        <td class="price" style=" width: 40%;">{{ $cf->city }}</td>
                        <td class="price" style=" width: 10%;">Address-2 :</td>
                        <td class="price" style=" width: 40%;">{{ $cf->addr2 }}</td>
                    </tr>
                    <tr style="height: 40px;">
                        <td class="price" style=" width: 10%;">Country :</td>
                        <td class="price" style=" width: 40%;">{{ $cf->country }}</td>
                        <td class="price" style=" width: 10%;">Zip :</td>
                        <td class="price" style=" width: 40%;">{{ $cf->zip }}</td>
                    </tr>
                    <tr style="height: 40px;">
                        <td class="price" style=" width: 10%;">Card Name :</td>
                        <td class="price" style=" width: 40%;">{{ $cf->f_name }} {{ $cf->l_name }}</td>
                        <td class="price" style=" width: 10%;">Card Number :</td>
                        <td class="price" style=" width: 40%;">
                            {{ $cf->c_number1 }}-{{ $cf->c_number2 }}-{{ $cf->c_number3 }}-{{ $cf->c_number4 }}
                        </td>
                    </tr>
                    <tr style="height: 40px;">
                        <td class="price" style=" width: 10%;">CVC or CVS :</td>
                        <td class="price" style=" width: 40%;">{{ $cf->cvs }}</td>
                        <td class="price" style=" width: 10%;">Expiration Date :</td>
                        <td class="price" style=" width: 40%;"> {{ $cf->month }}-{{ $cf->year }} </td>
                    </tr>
                    <tr style="height: 40px;">
                        <td class="price" style=" width: 10%;">Product Name :</td>
                        <td class="price" style=" width: 40%;">{{ $cf->pro_name }}</td>
                        <td class="price" style=" width: 10%;">Product Quantity :</td>
                        <td class="price" style=" width: 40%;"> {{ $cf->quantity }} </td>
                    </tr>
                    <?php
                        $sTotal = $cf->total + 100;
                    ?>
                    <tr style="height: 40px;">
                        <td class="price" style=" width: 10%;">Product Color :</td>
                        <td class="price" style=" width: 40%;">{{ $cf->color }}</td>
                        <td class="price" style=" width: 10%;">Product Price :</td>
                        <td class="price" style=" width: 40%;"> {{ $cf->pro_price }}  + 100 (Shipping)</td>
                    </tr>
                    <tr style="height: 40px;">
                        <td class="price" style=" width: 10%;">Product Size :</td>
                        <td class="price" style=" width: 40%;">{{ $cf->size }}</td>
                        <td class="price" style=" width: 10%;">Sub-Total :</td>
                        <td class="price" style=" width: 40%;"> {{ $sTotal }} </td>
                    </tr>
                </table>
                @endforeach
            </section>
        </div>
    </div>
</div>
</div>

<div style="border: #507ad4; width: 100%; height: 40px; margin-top: -30px; background-color: #ddd; text-align: right;">
    <p class="right-align" style="margin-right: 70px;">
        <button onClick="printContent('info')" class="btn btn-danger higher bold">Print</button>
    </p>
</div>

@include('layouts.public.partials.checkout_footer')