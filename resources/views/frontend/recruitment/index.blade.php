@extends('frontend.layout.index')
@section('content')

    @if(!empty($data))
            <div class="box col-md-12">
                <div class="box-inner">
                    <h2>Tin Tuyển Dụng</h2>
                    <div class="box-content">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>Tiêu Đề</th>
                                <th>Vị Trí Tuyển</th>
                                <th>Số Lượng Tuyển</th>
                                <th>Ngày Tạo</th>
                                <th>Chi Tiết</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $items)
                            <tr>
                                <td>{{$items->job_title}}</td>
                                <td class="center">{{$items->position}}</td>
                                <td class="center">{{$items->quantity}}</td>
                                <td class="center">{{$items->created_at}}</td>
                                <td class="center"><a href="{{route('fe.viewRecruitment',['id'=>$items->id])}}">Xem Chi Tiết</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <ul class="pagination pagination-centered">
                            <li><a href="#">Prev</a></li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    @endif
@endsection