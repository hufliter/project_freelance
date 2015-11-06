@extends('admin.layout.index')
@section('content')
{!! Form::open(array('route' => array('category.postCreate'), 'method' => 'POST')) !!}
        <div class="form-group">
            {!! Form::label('Category name') !!}
            {!! Form::text('name', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Category Name')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Parent') !!}
            {!! Form::select('parent_id',$categories) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Active') !!}
            {!! Form::checkbox('is_active')!!}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    {!! Form::close() !!}
@endsection