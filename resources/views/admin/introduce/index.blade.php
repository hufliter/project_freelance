@extends('admin.layout.index')

@section('content')
<div class="row">
    <div class="col-md-8">
        <span>
            <a href="{{route('intro.create')}}" class="btn btn-primary">Create Introduce</a>
            <a href="{{route('intro.view')}}" class="btn btn-info">View Detail Introduce</a>
        </span>
    </div>
</div>
<div class="box-header well">
    <h2><i class="glyphicon glyphicon-info-sign"></i> Introduction</h2>

    <div class="box-icon">
        <a href="#" class="btn btn-setting btn-round btn-default"><i
                class="glyphicon glyphicon-cog"></i></a>
        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                class="glyphicon glyphicon-chevron-up"></i></a>
        <a href="#" class="btn btn-close btn-round btn-default"><i
                class="glyphicon glyphicon-remove"></i></a>
    </div>
</div>
<div class="box-content row">
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
    <div class="col-lg-7 col-md-12">
        <h1>Introduce <br>
            <small>Lorem issum Lorem issum Lorem issum Lorem issum Lorem issum Lorem issum Lorem issum.</small>
        </h1>
        <p>Lorem issum Lorem issum Lorem issum Lorem issum Lorem issum Lorem issum Lorem issum Lorem issum Lorem issum
        Lorem issum Lorem issum Lorem issum Lorem issum </p>

        <p><b>Lorem issum Lorem issum Lorem issum Lorem issum Lorem issum Lorem issum Lorem issum
        Lorem issum Lorem issum Lorem issum .</b></p>

    </div>
</div>
@endsection