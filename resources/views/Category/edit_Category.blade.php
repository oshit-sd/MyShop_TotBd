@extends('layouts.admin.master')
@section('cate_info', 'active')
@section('list_cate', 'active')

@section('content')
    @foreach($cate as $cate)
    <div class="col-md-6" >
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-body"  style="background-color: #f7ffef;">
                <!-- BEGIN FORM-->
                <form  id="registration_form" role="form" method="POST" action="{{'/Category/'.$cate->id}}">
                    {{ csrf_field() }}
                    <div class="form-body">

                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Item Name' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <select name="item_id" class="form-control" required>
                                    <option value="">{{ $cate->item_name}}</option>
                                    @foreach($allITM as $itm)
                                        <option value="{{ $itm->id }}">{{ $itm->item_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            {!! Form::label('form_control_1', 'Category Name' ,  ['class' => 'col-md-4 control-labe', ]) !!}
                            <div class="col-md-8">
                                <input id="smenu" type="text" value="{{ $cate->category }}" class="form-control" name="category" placeholder="Sub Menu" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-8 col-md-8">
                                <a href="{{ url('/Category') }}" class="btn btn-success">Back</a>
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
    @endforeach
@endsection
