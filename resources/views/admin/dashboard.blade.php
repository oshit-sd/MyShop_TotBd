@extends('layouts.admin.master')


@section('content')
    <div class="row">

        <?php
        $pendingOrd =   DB::table('paymentinfos')
            ->join('shopcarts','paymentinfos.ses_id','=','shopcarts.session_id')
            ->select('paymentinfos.*','shopcarts.*')
            ->where('shopcarts.pending', 0)
            ->count();

        $confirmOrd =   DB::table('paymentinfos')
            ->join('shopcarts','paymentinfos.ses_id','=','shopcarts.session_id')
            ->select('paymentinfos.*','shopcarts.*')
            ->where('shopcarts.pending', 1)
            ->count();
        ?>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 red" href="{{ url('/PendingOrders') }}">
                <div class="visual">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>
                            @if(isset($pendingOrd)) {{ $pendingOrd }} @endif</span>
                    </div>
                    <div class="desc"> Pending Orders </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 purple" href="{{ url('/Product') }}">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>{{ $pd }}</span> Product </div>
                    <div class="desc"> Total Publish </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue" href="{{ url('/Item') }}">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>{{ $item }}</span>
                    </div>
                    <div class="desc"> Total Item </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 green" href="{{ url('/Category') }}">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>{{ $cate }}</span>
                    </div>
                    <div class="desc"> Category </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 green" href="{{ url('/ConfirmOrders') }}">
                <div class="visual">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span> {{ $confirmOrd }} </span>
                    </div>
                    <div class="desc"> Confirm Orders </div>
                </div>
            </a>
        </div>

    </div>
@endsection