@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-edit"></i> Tạo Thông Tin Kĩ Thuật</h2>

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
            {!! Form::open(array('route' => array('technical.postCreate'), 'method' => 'POST')) !!}
                <div class="form-group">
                    {!! Form::label('Tiêu Đề') !!}
                    {!! Form::text('name', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Tiêu Đề')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Đường Dẫn') !!}
                    {!! Form::text('url', null,
                        array('required', 'class'=>'form-control', 'placeholder'=>'Đường dẫn')
                        ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Kích hoạt') !!}
                    {!! Form::checkbox('active', 1,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Kích hoạt')) !!}
                </div>
                {!! Form::submit('Tạo Thông Tin Kĩ Thuật', array('class' => 'btn btn-primary')) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection