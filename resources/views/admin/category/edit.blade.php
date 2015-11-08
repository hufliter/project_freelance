@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-edit"></i> Edit Category </h2>

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

            {!! HTML::ul($errors->all()) !!}

            {!! Form::model($cate, array('route' => array('category.postEdit', $cate->id), 'method' => 'POST')) !!}
                <div class="form-group">
                    {!! Form::hidden('id') !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Category Name') !!}
                    {!! Form::text('name', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Category Name')) !!}
                </div>

                <div class="form-group">
                    <label>Parent</label>
                    <select class="form-control" name="parent_id">
                    <option selected value="NULL">Select Category</option>
                        @foreach($categories as $key => $items)
                            <option value="{{$items['value']}}">{{$items['name']}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    {!! Form::label('Active') !!}
                    {!! Form::checkbox('is_active', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Active')) !!}
                </div>
                <a class="btn btn-primary" href="{{route('category.index')}}">Back</a>
            {!! Form::submit('Edit Category!', array('class' => 'btn btn-info')) !!}

            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection