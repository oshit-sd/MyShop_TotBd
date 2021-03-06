@extends('layouts.admin.master')
@section('news', 'active')
@section('ListNews', 'active')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <a href="/Product" style="margin-left: 15px; font-weight: bold; border-bottom: 1px solid">View News</a>
                <br><br>
                <div class="portlet-body">
                    <div style="width: 100%; text-align: center;">
                        @if(isset($message))
                            <div  class="alert alert-danger">{{ $message }}</div>
                        @endif
                    </div>
                    @if(isset($details))
                        <div style="width: 101.9%; text-align: center;">
                            @if(isset($query))
                                <div  class="alert alert-success">
                                    <p>
                                        The search results for your query <b style="color: #e85a8c;">{{ $query }}</b> are:
                                    </p>
                                </div>
                            @endif
                        </div>
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
                            <th style="width: 50px;"> Price </th>
                            <th style="width: 50px;"> Stock </th>
                            <th> Image </th>
                            <th style="width: 50px;"> Actions </th>
                        </tr>
                        </thead>
                        @foreach($details as $data)
                            <tbody>
                            <tr class="odd gradeX">
                                <td style="font-size: 12px;"> {{ $data->item_name }} </td>
                                <td style="font-size: 12px;"> {{ $data->category }} </td>
                                <td style="font-size: 12px;"> {{ $data->brand }} </td>
                                <td style="font-size: 12px;"> {{ $data->product_name }} </td>
                                <td style="font-size: 12px;"> {{ $data->product_price }} </td>
                                <td style="font-size: 12px;"> {{ $data->details }} </td>
                                <td style="font-size: 12px;"> {{ $data->product_price }} </td>
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
                        @endif
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection
