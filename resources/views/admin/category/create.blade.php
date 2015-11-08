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
            <label>Parent Category</label>
            <select class="form-control" name="parent_id">
            <option selected value="NULL">Select Category</option>
                @foreach($categories as $key => $items)
                    <option value="{{$items['value']}}">{{$items['name']}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Active</label>
            <input type="checkbox" name="is_active" value="1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    {!! Form::close() !!}
@endsection