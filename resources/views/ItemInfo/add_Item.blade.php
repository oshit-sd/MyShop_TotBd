@extends('layouts.admin.master')
@section('item_info', 'active')
@section('add_Item', 'active')

@section('content')
    <div class="col-md-6" >
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-body"  style="background-color: #f7ffef;">
                <!-- BEGIN FORM-->
                <form  id="registration_form" role="form" method="POST" action="{{ url('/Item') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-body">
                        <a href="/Item" style="margin-left: 15px; font-weight: bold; border-bottom: 1px solid">List Item</a>

                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Item Name' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input id="mmenu" type="text" class="form-control" name="item_name" placeholder="Item Name" required autofocus>
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
                </form>
                <!-- END FORM-->
                @if(Session::has('message'))
                    <div class="alert alert-success" style="color:#4691c3;  text-align: center;"> {{Session::get('message')}} </div>
                @endif
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
@endsection
