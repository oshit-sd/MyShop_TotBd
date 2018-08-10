@extends('layouts.admin.master')
@section('slider', 'active')
@section('add_Slider', 'active')

@section('content')
    <div class="col-md-6" >
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-body"  style="background-color: #f7ffef;">
                <!-- BEGIN FORM-->
                    {!! Form::open(['url' => '/Slider' , 'method' => 'POST', 'enctype'=>'multipart/form-data','file'=>true ]) !!}
                    {{ csrf_field() }}
                    <div class="form-body">
                        <a href="/Slider" style="margin-left: 15px; font-weight: bold; border-bottom: 1px solid">List Slider</a>

                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Slider Title1' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input id="smenu" type="text" class="form-control" name="slider_title1" placeholder="Slider Title"  autofocus>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Slider Title2' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input id="smenu" type="text" class="form-control" name="slider_title2" placeholder="Slider Title"  autofocus>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Slider Image' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input id="img" type="file" class="form-control" name="img"  required>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-8 col-md-8">
                                {!! Form::reset('Cancel', ['class' => 'btn btn-danger']) !!}
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                <!-- END FORM-->
                @if(Session::has('message'))
                    <div class="alert alert-success" style="color:#4691c3; text-align: center;"> {{Session::get('message')}} </div>
                @endif
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
@endsection
