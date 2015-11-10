@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-primary btn-sm" href="{{route('products.getCreate')}}">Create Products</a>
        </div>
    </div>
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Products Table</h2>

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
                <th>Category</th>
                <th>Product Name</th>
                {{--<th>Image</th>--}}
                <th>Product Usage</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @if(!empty($products))
                @foreach($products as $items)
                <tr>
                    <td>{{$items->cate_id}}</td>
                    <td class="center">{{$items->name}}</td>
                    {{--<td class="center">{{$items->image}}</td>--}}
                    <td class="center">{{$items->usage}}</td>
                    <td class="center">{{$items->description}}</td>
                    <td class="center">
                        @if($items->is_active == 1)
                        <span class="label-success label label-default">Active</span>
                        @elseif($items->is_active == 2)
                        <span class="label-warning label label-default">Pending</span>
                        @else
                        <span class="label-danger label label-default">Banned</span>
                        @endif
                    </td>
                    <td class="center">{{date('Y/m/d',strtotime($items->created_at))}}</td>

                    <td class="center">
                        <a class="btn btn-success" href="{{route('products.view',['id'=>$items->id])}}">
                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                            View
                        </a>
                        <a class="btn btn-info" href="{{route('products.getEdit',['id'=>$items->id])}}">
                            <i class="glyphicon glyphicon-edit icon-white"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger" href="{{route('products.delete',['id'=>$items->id])}}" onclick="return confirm('Are you sure you want to delete this product?');">
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