@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-primary btn-sm" href="{{route('technical.getCreate')}}">Tạo Mới</a>
        </div>
    </div>
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Quản Lí Thông Tin Kĩ Thuật</h2>
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
                <th>Tiêu Đề</th>
                <th>Kích Hoạt</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if(!empty($technical))
                @foreach($technical as $items)
                <tr>
                    <td>{{$items->name}}</td>
                    <td class="center">{{$items->active}}</td>
                    <td class="center">{{$items->created_at}}</td>
                    <td class="center">{{$items->updated_at}}</td>
                    <td class="center">
                        <a class="btn btn-success" href="{{route('technical.view',['id'=>$items->id])}}">
                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                            View
                        </a>
                        <a class="btn btn-info" href="{{route('technical.getEdit',['id'=>$items->id])}}">
                            <i class="glyphicon glyphicon-edit icon-white"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger" href="{{route('technical.delete',['id'=>$items->id])}}" onclick="return confirm('Bạn Có chắc muốn xóa thông tin này?');">
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