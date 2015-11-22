@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-th"></i> Chi Tiết Tin Thông Tin Kĩ Thuật </h2>

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
            <div class="row">
            @if( ! empty($technical))
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Tiêu Đề</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$technical->name}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Đường Dẫn</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$technical->url}}</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Kích Hoạt</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$technical->active}}</span>
                        </div>
                    </div>
            @endif
            </div>
        </div>
    </div>
    <span class="box col-md-4">
        <a href="{{route('technical.index')}}" class="btn btn-primary btn-sm">Back</a>
        <a href="{{route('technical.getEdit',['id'=>$technical->id])}}" class="btn btn-info btn-sm">Edit</a>
        <a href="{{route('technical.delete',['id'=>$technical->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa thông tin này?');">Delete</a>
    </span>
@endsection