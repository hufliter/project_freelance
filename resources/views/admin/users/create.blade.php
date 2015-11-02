@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-edit"></i> Create User</h2>

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
            @if($errors->has())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        {{$error}}<br>
                    @endforeach
                </div>
            @elseif(Session::has('messages'))
                <div class="alert alert-success">
                        {{Session::get('messages')}}<br>
                </div>
            @endif
            {!! Form::open(array('route' => array('users.postCreate'), 'method' => 'POST')) !!}
                <div class="form-group">
                    {!! Form::label('Username') !!}
                    {!! Form::text('username', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Username')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('FirstName') !!}
                    {!! Form::text('firstname', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'FirstName')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('LastName') !!}
                    {!! Form::text('lastname', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'LastName')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Email') !!}
                    {!! Form::text('email', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Email')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Password') !!}
                    {!! Form::password('password',
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Password')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Re-Password') !!}
                    {!! Form::password('re-password',
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Re-Password')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Role') !!}
                    {!! Form::text('role', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Role')) !!}
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