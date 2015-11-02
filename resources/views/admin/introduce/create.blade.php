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
    {!! Form::open(array('route' => array('users.postCreate'), 'method' => 'POST')) !!}
                    <div class="form-group">
                        {!! Form::label('Title') !!}
                        {!! Form::text('title', null,
                            array('required',
                                  'class'=>'form-control',
                                  'placeholder'=>'Title')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Content') !!}
                        {!! Form::textarea('content', null,
                            array('required',
                                  'class'=>'form-control',
                                  'placeholder'=>'Content')) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
@endsection