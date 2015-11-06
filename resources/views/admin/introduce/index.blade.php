@extends('admin.layout.index')

@section('content')
<span>
    <a href="{{route('intro.create')}}" class="btn btn-primary" style="display: none">Create Introduce</a>

</span>
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
    <div class="col-md-12">
        @if(!empty($data))
        @foreach($data as $item)
            <h3>{{$item->title}}</h3>

            <p>
                {{{base64_decode($item->content)}}}
            </p>

        <a href="{{route('intro.edit',array('id'=>$item->id))}}" class="btn btn-info">View Detail Introduce</a>
        @endforeach
        @endif
    </div>
</div>
@endsection