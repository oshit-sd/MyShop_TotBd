@extends('layouts.admin.master')
@section('brand_info', 'active')
@section('add_brand', 'active')

@section('content')
    <div class="col-md-6" >
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-body"  style="background-color: #f7ffef;">
                <!-- BEGIN FORM-->
                <form  id="registration_form" role="form" method="POST" action="{{ url('/Brand/'.$brands->id) }}">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <a href="/Brand" style="margin-left: 15px; font-weight: bold; border-bottom: 1px solid">List Main Menu</a>

                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Brand Name' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input  type="text"  value="{{ $brands->brand }}"  class="form-control" name="brand" placeholder="Brand Name" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-8 col-md-8">
                                <a href="{{ url('/Brand') }}" class="btn btn-success">Back</a>
                                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
@endsection
