@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-th"></i> Chi Tiết Liên Hệ</h2>

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
            @if( ! empty($contactData))
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Tiêu Đề</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$contactData->title}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Địa Chỉ</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$contactData->address}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Số Điện Thoại</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$contactData->phone}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Fax</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$contactData->fax}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Nội dung</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$contactData->content}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Ngày Gửi</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$contactData->created_at}}</span>
                        </div>
                    </div>
            @endif
            </div>
        </div>
    </div>
    <span class="box col-md-4">
        <a href="{{route('contact.index')}}" class="btn btn-primary btn-sm">Back</a>
        <a href="{{route('contact.delete',['id'=>$contactData->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa thông tin liên hệ này?');">Delete</a>
    </span>
    </div>
@endsection