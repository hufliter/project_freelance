@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-th"></i> Chi Tiết Tin Tuyển Dụng </h2>

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
            @if( ! empty($data))
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Tên Công Việc</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$data->job_title}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Vị trí</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$data->position}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Số Lượng</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$data->quantity}}</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Mức Lương</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$data->salary}}</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Yêu Cầu</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$data->requirement}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Mô Tả Công Việc</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$data->description}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Liên Hệ</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$data->contact}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Kích Hoạt</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$data->active}}</span>
                        </div>
                    </div>
            @endif
            </div>
        </div>
    </div>
    <span class="box col-md-4">
        <a href="{{route('recruitment.index')}}" class="btn btn-primary btn-sm">Back</a>
        <a href="{{route('recruitment.getEdit',['id'=>$data->id])}}" class="btn btn-info btn-sm">Edit</a>
        <a href="{{route('recruitment.delete',['id'=>$data->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa thông tin này?');">Delete</a>
    </span>

</div>
@endsection