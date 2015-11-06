@extends('admin.layout.index')
@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript">
      tinymce.init({
        selector : "textarea",
        plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
      });
    </script>
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-edit"></i> Edit Introduce</h2>

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

            {!! HTML::ul($errors->all()) !!}

            {!! Form::model($introData, array('route' => array('intro.postEdit', $introData->id), 'method' => 'POST')) !!}
                <div class="form-group">
                    {!! Form::hidden('id') !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Title') !!}
                    {!! Form::text('title', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Title')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Content') !!}
                    {!! Form::textArea('content', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Content')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Active') !!}
                    {!! Form::checkBox('is_active') !!}
                </div>
                <a class="btn btn-primary" href="{{route('intro')}}">Back</a>
            {!! Form::submit('Edit Introduce!', array('class' => 'btn btn-info')) !!}

            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection