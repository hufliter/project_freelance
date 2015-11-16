@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Danh Sách Liên Hệ</h2>
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
                <th>Địa Chỉ</th>
                <th>Số Điện Thoại</th>
                <th>Email</th>
                <th>Ngày Gửi</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($contacts as $items)
                <tr>
                    <td>{{$items->title}}</td>
                    <td class="center">{{$items->address}}</td>
                    <td class="center">{{$items->phone}}</td>
                    <td class="center">{{$items->email}}</td>
                    <td class="center">{{date('Y/m/d',strtotime($items->created_at))}}</td>
                    <td class="center">
                        <a class="btn btn-success" href="{{route('contact.getView',['id'=>$items->id])}}">
                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                            View
                        </a>
                        <a class="btn btn-danger" href="{{route('contact.delete',['id'=>$items->id])}}" onclick="return confirm('Are you sure you want to delete this user?');">
                            <i class="glyphicon glyphicon-trash icon-white"></i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection