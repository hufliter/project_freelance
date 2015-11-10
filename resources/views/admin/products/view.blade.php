@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-th"></i> View Products {{$product->slug}}</h2>

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
            @if( ! empty($product))
                {{--@foreach($cate as $key => $items)--}}
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Category Name</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$product->name}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Category</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$product->cate_id}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Usage</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$product->usage}}</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Image</label>
                        </div>
                        @foreach($product->image as $image)
                        <div class="col-md-2 nopadding">
                            <img class="img-thumbnail" src="{{asset('upload/img/'.$image)}}">
                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Description</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$product->description}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Product Code</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$product->slug}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Active</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$product->is_active}}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <label>Created at</label>
                        </div>
                        <div class="col-md-10">
                            <span>{{$product->created_at}}</span>
                        </div>
                    </div>
                {{--@endforeach--}}
            @endif
            </div>
        </div>
    </div>
    <span class="box col-md-4">
        <a href="{{route('products.index')}}" class="btn btn-primary btn-sm">Back</a>
        <a href="{{route('products.getEdit',['id'=>$product->id])}}" class="btn btn-info btn-sm">Edit</a>
        <a href="{{route('products.delete',['id'=>$product->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Category?');">Delete</a>
    </span>

</div>
@endsection