@extends('layouts.admin.master')
@section('slider', 'active')
@section('list_Slider', 'active')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <a href="/Slider/create" style="font-weight: bold; border-bottom: 1px solid">Add Slider</a> |
                <a href="/departments/trush" style="font-weight: bold; border-bottom: 1px solid">Trush</a>
                <br><br>
                <div class="portlet-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" style="color:#4691c3; text-align: center;"> {{Session::get('message')}} </div>
                    @elseif(Session::has('msg'))
                        <div class="alert alert-danger" style="text-align: center;" > {{Session::get('msg')}} </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                        <tr>
                            <th> Slide Title1 </th>
                            <th> Slide Title2 </th>
                            <th> Slide Image </th>
                            <th style="width: 80px;"> Actions </th>
                        </tr>
                        </thead>
                        @foreach($allData as $data)
                        <tbody>
                        <tr class="odd gradeX">

                            <td>{{ $data->slider_title1 }}</td>
                            <td>{{ $data->slider_title2 }}</td>
                            <td style="width: 200px;">
                                <img src="{{ $data->img }}"height="150" width="300"class="" />
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-left" role="menu">
                                        <li>
                                            <a href="{{ '/Slider/'.$data->id.'/edit' }}">
                                            <i class="btn btn-primary btn-sm">Edit</i>  </a>
                                        </li>
                                        <li><a href="">
                                            {!! Form::open(['url' => '/Slider/'.$data->id , 'method' => 'DELETE']) !!}
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
