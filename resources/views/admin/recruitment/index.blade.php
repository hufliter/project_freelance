@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-primary btn-sm" href="{{ route('recruitment.getCreate') }}">Tạo Tin Tuyển Dụng</a>
        </div>
    </div>
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Quản Lí Thông Tin Tuyển Dụng</h2>
        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
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
        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
            <thead>
            <tr>
                <th>Tên Công Việc</th>
                <th>Vị Trí Cần Tuyển</th>
                <th>Số Lượng</th>
                <th>Mức Lương</th>
                <th>Liên hệ</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if($data)
                @foreach($data as $items)
                <tr>
                    <td>{{$items->job_title}}</td>
                    <td class="center">{{$items->position}}</td>
                    <td class="center">{{$items->quantity}}</td>
                    <td class="center">{{$items->salary}}</td>
                    <td class="center">{{$items->contact}}</td>
                    <td class="center">
                        <a class="btn btn-success" href="{{route('recruitment.getView',['id'=>$items->id])}}">
                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                            View
                        </a>
                        <a class="btn btn-info" href="{{route('recruitment.getEdit',['id'=>$items->id])}}">
                            <i class="glyphicon glyphicon-edit icon-white"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger" href="{{route('recruitment.delete',['id'=>$items->id])}}" onclick="return confirm('Are you sure you want to delete this user?');">
                            <i class="glyphicon glyphicon-trash icon-white"></i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection