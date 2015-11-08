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
            {!! Form::open(array('route' => array('products.postCreate'), 'method' => 'POST')) !!}
                <div class="form-group">
                    {!! Form::label('Product Code') !!}
                    {!! Form::text('slug', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Product Code')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Category') !!}
                    {!! Form::select('cate_id') !!}
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
                    {!! Form::file('image', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Image')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Usage') !!}
                    {!! Form::textarea('usage', null,
                                    array( 'class'=>'form-control',
                                          'placeholder'=>'Usage')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Description') !!}
                    {!! Form::textarea('description', null,
                                    array( 'class'=>'form-control',
                                          'placeholder'=>'Description')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Active') !!}
                    {!! Form::checkbox('is_active', 1,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Active')) !!}
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection