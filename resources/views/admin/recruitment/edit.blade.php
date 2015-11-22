@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-edit"></i> Sửa thông tin tuyển dụng</h2>

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

            {!! Form::model($data, array('route' => array('recruitment.postEdit', $data->id), 'method' => 'POST')) !!}
                <div class="form-group">
                    {!! Form::hidden('id') !!}
                </div>

                 <div class="form-group">
                    {!! Form::label('Tên Công Việc') !!}
                    {!! Form::text('job_title', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Tên Công Việc')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Vị Trí') !!}
                    {!! Form::text('position', null,
                        array('required', 'class'=>'form-control', 'placeholder'=>'Vị Trí')
                        ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Số Lượng') !!}
                    {!! Form::input('number','quantity', null ,array('min'=>0, 'max'=>50,'required','class'=>'form-control','placeholder'=>'Số Lượng')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Mức Lương') !!}
                    {!! Form::text('salary', null,
                        array('required', 'class'=>'form-control', 'placeholder'=>'Mức Lương')
                        ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Yêu Cầu') !!}
                    {!! Form::textarea('requirement', null,
                        array('required', 'class'=>'form-control', 'placeholder'=>'Yêu Cầu')
                        ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Mô Tả') !!}
                    {!! Form::textarea('description', null,
                        array(
                            'required',
                            'class'=>'form-control',
                            'placeholder'=>'Mô Tả')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Liên Hệ') !!}
                    {!! Form::text('contact', null,
                        array(
                            'required',
                            'class'=>'form-control',
                            'placeholder'=>'Liên Hệ')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Kích hoạt') !!}
                    {!! Form::checkbox('active', 1,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Kích hoạt')) !!}
                </div>
                {!! Form::submit('Chỉnh Sửa Thông Tin', array('class' => 'btn btn-info')) !!}

            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection