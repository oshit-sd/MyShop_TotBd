@extends('layouts.admin.master')
@section('news', 'active')
@section('ListNews', 'active')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <a href="/Product/create" style="font-weight: bold; border-bottom: 1px solid">Add Product</a> |
                <a href="/Product"  style="font-weight: bold; border-bottom: 1px solid">Back Product Info</a>
                <br><br>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                        <tr>
                            <th  style="width: 150px;"> Product Name </th>
                            <th style="width: 20px;"> Red </th>
                            <th style="width: 20px;"> Green </th>
                            <th style="width: 20px;"> Blue </th>
                            <th style="width: 20px;"> Black </th>
                            <th style="width: 20px;"> Pink </th>
                            <th style="width: 20px;"> Purple </th>
                            <th style="width: 20px;"> Orange </th>
                            <th style="width: 20px;"> White </th>
                            <th style="width: 20px;"> Yellow </th>
                            <th style="width: 2px;"> XS </th>
                            <th style="width: 2px;"> S </th>
                            <th style="width: 2px;"> M </th>
                            <th style="width: 2px;"> L </th>
                            <th style="width: 2px;"> XL </th>
                            <th style="width: 2px;"> XXL </th>
                            <th  style="width: 50px;"> Featured </th>
                            <th style="width: 10px;"> New </th>
                            <th style="width: 30px;"> Popular </th>
                            <th style="width: 50px;"> Actions </th>
                        </tr>
                        </thead>
                        @foreach($allData as $data)
                            <tbody>
                            <tr class="odd gradeX">
                                <td style="font-size: 12px;"> {{ $data->product_name }} </td>
                                <td style="font-size: 12px;"> {{ $data->red }} </td>
                                <td style="font-size: 12px;"> {{ $data->green }} </td>
                                <td style="font-size: 12px;"> {{ $data->blue }} </td>
                                <td style="font-size: 12px;"> {{ $data->black }} </td>
                                <td style="font-size: 12px;"> {{ $data->pink }} </td>
                                <td style="font-size: 12px;"> {{ $data->purple }} </td>
                                <td style="font-size: 12px;"> {{ $data->orange }} </td>
                                <td style="font-size: 12px;"> {{ $data->white }} </td>
                                <td style="font-size: 12px;"> {{ $data->yellow }} </td>
                                <td style="font-size: 12px;"> {{ $data->xsmall }} </td>
                                <td style="font-size: 12px;"> {{ $data->small }} </td>
                                <td style="font-size: 12px;"> {{ $data->medium }} </td>
                                <td style="font-size: 12px;"> {{ $data->large }} </td>
                                <td style="font-size: 12px;"> {{ $data->elarge }} </td>
                                <td style="font-size: 12px;"> {{ $data->huge }} </td>
                                <td style="font-size: 12px;">
                                    {{ $data->featured }}
                                    <a href="{{ url('/DFeatured/'.$data->id) }}" style="color:#e16b85;"><i class="fa fa-times"></i></a>
                                </td>

                                <td style="font-size: 12px;">
                                    {{ $data->new }}
                                    <a href="{{ url('/DNew/'.$data->id) }}" style="color:#e16b85;"><i class="fa fa-times"></i></a>
                                </td>
                                {{--<td style="font-size: 12px;"> {{ $data->slide }} </td>--}}
                                {{--<td style="width: 120px;"> {{ $data->lhead }} </td>--}}
                                <td style="font-size: 12px;">
                                    {{ $data->popular }}
                                    <a href="{{ url('/DPopu/'.$data->id) }}" style="color:#e16b85;"><i class="fa fa-times"></i></a>
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
