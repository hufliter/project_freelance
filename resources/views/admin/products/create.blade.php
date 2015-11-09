@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-edit"></i> Create Product</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round btn-default"><i
                        class="glyphicon glyphicon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                        class="glyphicon glyphicon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round btn-default"><i
                        class="glyphicon glyphicon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            {!! Form::open(array('route' => array('products.postCreate'), 'method' => 'POST', 'files' => true)) !!}
                <div class="form-group">
                    {!! Form::label('Product Code') !!}
                    {!! Form::text('slug', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Product Code')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Category') !!}
                    @if(!empty($cate))
                        <select name="parent_id" class="form-group">
                            @foreach($cate as $items)
                            <optgroup label="{{$items->name}}">
                                <option value="{{$items->child_id}}">{{$items->child_name}}</option>
                            </optgroup>
                            @endforeach
                        </select>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('Product Name') !!}
                    {!! Form::text('name', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Product Name')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Image') !!}
                    {!! Form::file('fileUpload', null) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Usage') !!}
                    {!! Form::textarea('usage', null,
                        array(
                            'required',
                            'class'=>'form-control',
                            'placeholder'=>'Usage')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Description') !!}
                    {!! Form::textarea('description', null,
                        array(
                            'required',
                            'class'=>'form-control',
                            'placeholder'=>'Description')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Active') !!}
                    {!! Form::checkbox('is_active', 1,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Active')) !!}
                </div>
                {!! Form::submit('Create Product!', array('class' => 'btn btn-primary')) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection