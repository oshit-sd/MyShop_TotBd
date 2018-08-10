@extends('layouts.admin.master')
@section('cate_info', 'active')
@section('add_cate', 'active')

@section('content')
    <div class="col-md-6" >
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-body"  style="background-color: #f7ffef;">
                <!-- BEGIN FORM-->
                <form  id="registration_form" role="form" method="POST" action="{{'/Category'}}">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <a href="/Category" style="margin-left: 15px; font-weight: bold; border-bottom: 1px solid">List Category</a>


                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Category Name' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <select name="item_id" id="item_id" class="form-control" required >
                                    <option value="">...Select Item...</option>
                                    @foreach($allITM as $item)
                                        <option value="{{ $item->id }}">{{ $item->item_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Category Name' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input id="smenu" type="text" class="form-control" name="category" placeholder="Category Name" required autofocus>
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
                    <div class="alert alert-success" style="color:#4691c3; text-align: center;"> {{Session::get('message')}} </div>
                @endif
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
@endsection
