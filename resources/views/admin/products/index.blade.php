@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-primary btn-sm" href="{{route('products.getCreate')}}">Tạo Sản Phẩm</a>
        </div>
    </div>
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-edit"></i> Danh Sách Sản Phẩm</h2>

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
                <th>Thể Loại</th>
                <th>Mã Sản Phẩm</th>
                {{--<th>Product Name</th>--}}
                {{--<th>Image</th>--}}
                {{--<th>Product Usage</th>
                <th>Description</th>--}}
                <th>Trạng Thái</th>
                <th>Ngày Tạo</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @if(!empty($products))
                @foreach($products as $items)
                <tr>
                    <td>{{$items->cate_name}}</td>
                    <td>{{$items->slug}}</td>
                    {{--<td class="center">{{$items->product_name}}</td>--}}
                    {{--<td class="center">{{$items->image}}</td>--}}
                    {{--<td class="center">{{$items->usage}}</td>
                    <td class="center">{{$items->product_description}}</td>--}}
                    <td class="center">
                        @if($items->product_active == 1)
                        <span class="label-success label label-default">Kích Hoạt</span>
                        @elseif($items->product_active == 2)
                        <span class="label-warning label label-default">Đang Duyệt</span>
                        @else
                        <span class="label-danger label label-default">Đã Chặn</span>
                        @endif
                    </td>
                    <td class="center">{{date('Y/m/d',strtotime($items->created_at))}}</td>

                    <td class="center">
                        <a class="btn btn-success" href="{{route('products.view',['id'=>$items->product_id])}}">
                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                            Xem
                        </a>
                        <a class="btn btn-info" href="{{route('products.getEdit',['id'=>$items->product_id])}}">
                            <i class="glyphicon glyphicon-edit icon-white"></i>
                            Sửa
                        </a>
                        <a class="btn btn-danger" href="{{route('products.delete',['id'=>$items->product_id])}}" onclick="return confirm('Are you sure you want to delete this product?');">
                            <i class="glyphicon glyphicon-trash icon-white"></i>
                            Xóa
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