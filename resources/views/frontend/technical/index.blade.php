@extends('frontend.layout.index')
@section('content')
@if(!empty($data))
            <div class="box col-md-12">
                <div class="box-inner">
                    <h2>Thông Tin Kĩ Thuật</h2>
                    <div class="box-content">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>Tên Kĩ Thuật</th>
                                <th>Ngày Tạo</th>
                                <th>Đường Dẫn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $items)
                            <tr>
                                <td>{{$items->name}}</td>
                                <td class="center">{{$items->created_at}}</td>
                                <td class="center"><a href="{{$items->url}}" target="_blank">Xem Chi Tiết</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!!$data->render()!!}
                    </div>
                </div>
            </div>
    @endif
@endsection