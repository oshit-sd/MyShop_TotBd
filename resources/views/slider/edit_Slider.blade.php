@extends('layouts.admin.master')
@section('sub_menu', 'active')
@section('add_sub', 'active')

@section('content')
    <div class="col-md-6" >
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-body"  style="background-color: #f7ffef;">
                <!-- BEGIN FORM-->
                    {!! Form::open(['url' => '/Slider/'.$slide->id , 'method' => 'POST', 'enctype'=>'multipart/form-data','file'=>true ]) !!}
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Slider Title1' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input id="smenu" type="text" value="{{ $slide->slider_title1 }}" class="form-control" name="slider_title1" placeholder="Slider Title" autofocus>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Slider Title2' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input id="smenu" type="text" value="{{ $slide->slider_title2 }}" class="form-control" name="slider_title2" placeholder="Slider Title" autofocus>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Slider Image' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <img src="{{ $slide->img }}" width="280px" height="120px">
                                <input id="img" type="file" class="form-control" name="img" >
                            </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-8 col-md-8">
                                <a href="{{ url('/Slider') }}" class="btn btn-success">Back</a>
                                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
@endsection
