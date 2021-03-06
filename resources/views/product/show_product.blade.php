@extends('layouts.admin.master')
@section('p_info', 'active')
@section('List_pro', 'active')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <a href="/Product/create" style="font-weight: bold; border-bottom: 1px solid">Add Product</a> |
                <a href="/Next"  style="font-weight: bold; border-bottom: 1px solid">Next Product Info</a>
                <br><br>
                <div class="portlet-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" style="color:#4691c3;  text-align: center;"> {{Session::get('message')}} </div>
                    @elseif(Session::has('msg'))
                        <div class="alert alert-danger" style="text-align: center;"> {{Session::get('msg')}} </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">

                        <div class="searchBack">
                            <form action="{{ url('/SearchProduct') }}" method="post" role="search">
                                {{ csrf_field() }}
                                <div style="float: right;"> <input type="text" size="50" name="q" class="form-control" placeholder="Search Here"> </div>

                                <div style="float: right;">
                                    <button type="submit" class="btn btn-default btnhead"><span class="glyphicon glyphicon-search"></span></button>
                                </div>
                              </form>
                        </div><br>


                        <thead>
                        <tr>
                            <th style="width: 80px;"> Item </th>
                            <th style="width: 80px;"> Category </th>
                            <th style="width: 80px;"> Brand </th>
                            <th style="width: 100px;"> Name </th>
                            <th style="width: 50px;"> Price </th>
                            <th> Details </th>
                            <th style="width: 50px;"> Stock </th>
                            <th> Image </th>
                            <th style="width: 80px;"> Actions </th>
                        </tr>
                        </thead>
                        @foreach($allData as $data)
                            <tbody>
                            <tr class="odd gradeX">
                                <td style="font-size: 12px;"> {{ $data->item_name }} </td>
                                <td style="font-size: 12px;"> {{ $data->category }} </td>
                                <td style="font-size: 12px;"> {{ $data->brand }} </td>
                                <td style="font-size: 12px;"> {{ $data->product_name }} </td>
                                <td style="font-size: 12px;"> {{ $data->product_price }} </td>
                                <td style="font-size: 12px;"> {{ $data->details }} </td>
                                <td style="font-size: 12px;"> {{ $data->product_stock }} </td>
                                <td style="width: 120px;">
                                    <img src="{{ $data->img }}"height="100" width="105"class="" />
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="{{ '/Product/'.$data->id.'/edit' }}">
                                                    <i class="btn btn-primary btn-sm">Edit</i>  </a>
                                            </li>
                                            <li><a href="">
                                                    {!! Form::open(['url' => '/Product/'.$data->id , 'method' => 'DELETE']) !!}
                                                    <i> {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'] )!!}</i>
                                                    {!! Form::close() !!}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>

                    {{ $allData->links() }}
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection
