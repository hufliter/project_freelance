@extends('frontend.layout.index')
@section('content')
@if(!empty($data))
<div class="row">
    <div class="span5">
        @foreach($data->image as $img)
        <img src="{{asset('upload/img/'.$img)}}" class="img-polaroid" alt="" style="width: 320px;height: 300px;">
        @endforeach
    </div>
    <div class="span7">
        <h2>{{$data->slug}}</h2>
    </div>
</div>
<div class="row">
    <div class="span12">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab-1">Mô Tả</a></li>
            <li><a data-toggle="tab" href="#tab-2">Ứng Dụng</a></li>
        </ul>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade in active">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Kích Thước: </th>
                            <td>{{$data->size}} (mm)</td>
                        </tr>
                        <tr>
                            <th>Trọng Lượng: </th>
                            <td>{{$data->weight}}gam</td>
                        </tr>
                        <tr>
                            <th>Bao Bì: </th>
                            <td>{{$data->package}}</td>
                        </tr>
                        <tr>
                            <th>Chữ: </th>
                            <td>{{$data->words}}</td>
                        </tr>
                        <tr>
                            <th>Hàn: </th>
                            <td>{{$data->solder}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="tab-2" class="tab-pane fade">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Ứng Dụng</th>
                        </tr>
                        <tr>
                            <td>{{$data->description}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endif
@endsection