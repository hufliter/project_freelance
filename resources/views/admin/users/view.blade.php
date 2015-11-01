@extends('admin.layout.index')
@section('content')
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th"></i> View User {{Auth::user()->username}}</h2>

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
                @if( ! empty($userData))
                    @foreach($userData as $key => $items)
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label>Username</label>
                            </div>
                            <div class="col-md-10">
                                <span>{{$items->username}}</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label>Fullname</label>
                            </div>
                            <div class="col-md-10">
                                <span>{{$items->full_name}}</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label>Role</label>
                            </div>
                            <div class="col-md-10">
                                <span>{{$items->role}}</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label>Active</label>
                            </div>
                            <div class="col-md-10">
                                <span>{{$items->is_active}}</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label>Created at</label>
                            </div>
                            <div class="col-md-10">
                                <span>{{$items->created_at}}</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label>Updated at</label>
                            </div>
                            <div class="col-md-10">
                                <span>{{$items->created_at}}</span>
                            </div>
                        </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
        <span class="box col-md-4">
            <a href="{{route('users.index')}}" class="btn btn-primary btn-sm">Back</a>
            <a href="{{route('users.edit',['id'=>$items->id])}}" class="btn btn-info btn-sm">Edit</a>
            <a href="{{route('users.delete',['id'=>$items->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
        </span>

    </div>
@endsection