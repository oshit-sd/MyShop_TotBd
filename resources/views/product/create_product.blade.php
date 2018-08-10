@extends('layouts.admin.master')
@section('p_info', 'active')
@section('add_pro', 'active')

@section('content')
<div class="col-md-12">
    @if(Session::has('message'))
        <div class="alert alert-success" style="color:#4691c3; text-align: center;"> {{Session::get('message')}} </div>
@endif
    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-body"  style="background-color: #f7ffef;">
            <!-- BEGIN FORM-->
            {{--<form  id="registration_form" role="form" method="POST" action="{{ url('/News') }}">--}}
                {!! Form::open(['url' => '/Product' , 'method' => 'POST', 'enctype'=>'multipart/form-data','file'=>true ]) !!}
                {{ csrf_field() }}
            <div class="form-body">
                <a href="/Product" style="margin-left: 15px; font-weight: bold; border-bottom: 1px solid">View Products</a>

                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Item Name' ,  ['class' => 'col-md-2 control-label',  ]) !!}
                    <div class="col-md-10">
                        <select name="item" id="item" class="form-control" required >
                            <option value="">...Select Item...</option>
                            @foreach($allITM as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Category Name' ,  ['class' => 'col-md-2 control-label',  ]) !!}
                    <div class="col-md-10">
                        <select name="category" id="category" class="form-control" required >
                            <option value="">...Select Category...</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Category Name' ,  ['class' => 'col-md-2 control-label',  ]) !!}
                    <div class="col-md-10">
                        <select name="brand" id="brand" class="form-control" >
                            <option value="">...Select Brand...</option>
                            @foreach($allBrand as $brand)
                                <option>{{ $brand->brand }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Product Name' ,  ['class' => 'col-md-2 control-label',  ]) !!}
                    <div class="col-md-10">
                        <input id="heading" type="text" class="form-control" name="product_name" placeholder="Product Name" required>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Product Price' ,  ['class' => 'col-md-2 control-label',  ]) !!}
                    <div class="col-md-10">
                        <input id="heading" type="text" class="form-control" name="product_price" placeholder="Product Price" required>
                    </div>
                </div>

                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Product Details' ,  ['class' => 'col-md-2 control-label', ]) !!}
                    <div class="col-md-10">
                        <textarea name="details" rows="8" cols="112"  required></textarea>
                    </div>
                </div>

                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Product Image' ,  ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-10">
                        <input id="img" type="file" class="form-control" style="border-bottom: 0px solid;" name="img">
                    </div>
                </div><br><br>
                <div class="form-group form-md-line-input"></div>

                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Product Stock' ,  ['class' => 'col-md-2 control-label',  ]) !!}
                    <div class="col-md-10">
                        <input id="heading" type="text" class="form-control" value="20" name="product_stock" placeholder="Product Stock" required>
                    </div>
                </div>


                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Select Color' ,  ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-10" style="padding-top: 10px;">
                        <input type="checkbox" name="red" value="Red"> Red  &nbsp;
                        <input type="checkbox" name="green" value="Green"> Green  &nbsp;
                        <input type="checkbox" name="blue" value="Blue"> Blue  &nbsp;
                        <input type="checkbox" name="black" value="Black"> Black  &nbsp;
                        <input type="checkbox" name="pink" value="Pink"> Pink &nbsp;
                        <input type="checkbox" name="purple" value="Purple"> Purple &nbsp;
                        <input type="checkbox" name="orange" value="Orange"> Orange &nbsp;
                        <input type="checkbox" name="white" value="White"> White &nbsp;
                        <input type="checkbox" name="yellow" value="Yellow"> Yellow &nbsp;
                    </div>
                </div>

                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Select Size' ,  ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-10" style="padding-top: 10px;">
                        <input type="checkbox" name="xsmall" value="XS"> XS  &nbsp;
                        <input type="checkbox" name="small" value="S"> S &nbsp;
                        <input type="checkbox" name="medium" value="M"> M &nbsp;
                        <input type="checkbox" name="large" value="L"> L &nbsp;
                        <input type="checkbox" name="elarge" value="XL"> XL &nbsp;
                        <input type="checkbox" name="huge" value="XXL"> XXL &nbsp; || &nbsp;
                        <input type="checkbox" name="s28" value="28"> 28 &nbsp;
                        <input type="checkbox" name="s29" value="29"> 29 &nbsp;
                        <input type="checkbox" name="s30" value="30"> 30 &nbsp;
                        <input type="checkbox" name="s31" value="31"> 31 &nbsp;
                        <input type="checkbox" name="s32" value="32"> 32 &nbsp;
                    </div>
                </div>

                <div class="form-group form-md-line-input">
                    {!! Form::label('form_control_1', 'Show Product' ,  ['class' => 'col-md-2 control-label']) !!}
                    <div class="col-md-10" style="padding-top: 10px;">
                      <input type="checkbox" name="featured" value="Featured"> Featured  &nbsp;

                      <input type="checkbox" name="new" value="New"> New &nbsp;

                      <input type="checkbox" name="popular" value="Popular"> Popular &nbsp;
                    </div>
                </div>

            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-2">
                        {!! Form::reset('Reset', ['class' => 'btn btn-danger']) !!}
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            </div>
            {{--</form>--}}
        {!! Form::close() !!}
            <!-- END FORM-->
        </div>
    </div>
    <!-- END VALIDATION STATES-->
</div>
@endsection
@include('product.ItemTocategory')