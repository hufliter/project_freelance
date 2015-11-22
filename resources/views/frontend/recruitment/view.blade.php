@extends('frontend.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="box-inner">
        <h2><i class="glyphicon glyphicon-th"></i> Thông Tin Tuyển Dụng</h2>
        <div class="box-content">
            <div class="row">
            @if( ! empty($data))
                <div class="col-md-12">
                    <div class="col-md-2">
                        <label>Tiêu Đề: </label>
                    </div>
                    <div class="col-md-10">
                        <span>{{$data->job_title}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2">
                        <label>Vị Trí Tuyển: </label>
                    </div>
                    <div class="col-md-10">
                        <span>{{$data->position}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2">
                        <label>Số Lượng Tuyển: </label>
                    </div>
                    <div class="col-md-10">
                        <span>{{$data->quantity}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2">
                        <label>Mức Lương: </label>
                    </div>
                    <div class="col-md-10">
                        <span>{{$data->salary}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2">
                        <label>Yêu Cầu: </label>
                    </div>
                    <div class="col-md-10">
                        <span>{{$data->requirement}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2">
                        <label>Mô Tả Công Việc: </label>
                    </div>
                    <div class="col-md-10">
                        <span>{{$data->description}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2">
                        <label>Thông Tin Liên Hệ: </label>
                    </div>
                    <div class="col-md-10">
                        <span>{{$data->contact}}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2">
                        <label>Ngày Tạo: </label>
                    </div>
                    <div class="col-md-10">
                        <span>{{$data->created_at}}</span>
                    </div>
                </div>
            @endif
            </div>
        </div>
    </div>
    <span class="box col-md-4">
        <a href="{{route('fe.recruitment')}}" class="btn btn-primary btn-sm">Back</a>
    </span>
</div>
@endsection