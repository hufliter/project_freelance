@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-primary btn-sm" href="#">Create Category</a>
        </div>
    </div>
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Category Table</h2>
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
                <th>Name</th>
                <th>Parent_id</th>
                <th>is_active</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

                <tr>
                    <td>name</td>
                    <td class="center">parent</td>
                    <td class="center">í_active</td>
                    <td class="center">created</td>
                    <td class="center">updated</td>
                    <td class="center">
                        <a class="btn btn-success" href="#">
                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                            View
                        </a>
                        <a class="btn btn-info" href="#">
                            <i class="glyphicon glyphicon-edit icon-white"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger" href="#" onclick="return confirm('Are you sure you want to delete this user?');">
                            <i class="glyphicon glyphicon-trash icon-white"></i>
                            Delete
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection