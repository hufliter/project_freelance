@extends('admin.layout.index')

@section('content')
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-edit"></i> Edit User {{Auth::user()->username}}</h2>

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

            {!! Form::model($userData, array('route' => array('users.postEdit', $userData->id), 'method' => 'POST')) !!}
                <div class="form-group">
                    {!! Form::label('Firstname') !!}
                    {!! Form::text('firstname', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Firstname')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Lastname') !!}
                    {!! Form::text('lastname', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Lastname')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Email Address') !!}
                    {!! Form::email('email', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Your Email')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Password') !!}
                    {!! Form::password('password', ['class'=>'form-control','required'=>'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Re-Password') !!}
                    {!! Form::password('re-password', ['class'=>'form-control','required'=>'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Role') !!}
                    {!! Form::text('role', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Your Role')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Active') !!}
                    {!! Form::text('is_active', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Active')) !!}
                </div>
            {!! Form::submit('Edit User!', array('class' => 'btn btn-primary')) !!}

            {!! Form::close() !!}

        </div>
    </div>
</div>
    <!--/span-->
@endsection