@extends('frontend.layout.index')
@section('content')
@if(!empty($data))
    <h4>{{$data->title}}</h4>
    <p>
        {!! base64_decode($data->content) !!}
    </p>
@endif
@endsection