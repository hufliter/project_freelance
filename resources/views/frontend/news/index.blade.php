@extends('frontend.layout.index')
@section('content')
<div class="col-xs-12 col-sm-12">
    <header>Tin Tức</header>
    @if(!empty($data))

    <ul class="list-news">
    @foreach($data as $k => $d)
        <li>
            <div class="title-news">{{$k}}</div>
            <div class="news-content">
                {!! $d !!}
            </div>
        </li>
    @endforeach
    </ul>
    @endif
</div>
@endsection