@extends('frontend.layout.index');
@section('content')
<div id="products" class="row list-group">
    <div class="item  col-xs-4 col-lg-4 grid-group-item list-group-item">
    @if(!empty($data))
        @foreach($data as $item)
            @if( $item->is_active == 1 )
        <div class="thumbnail">
            <img class="group list-group-image" src="{{asset('upload/img/'.$item->image)}}" alt="" style="max-width: 400px;">
            <div class="caption">
                <h4 class="group inner list-group-item-heading">{{$item->slug}}</h4>
                <p class="group inner list-group-item-text">{{$item->description}}</p>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <p class="lead">
                            </p>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <a class="btn btn-success" href="{{route('fe.viewProduct',['id'=>$item->id])}}">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        </div>
            @endif
        @endforeach
    @endif
    </div>
</div>
{!! $data->render() !!}

@endsection