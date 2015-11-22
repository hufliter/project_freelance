@extends('frontend.layout.index')
@section('content')
<div>
       <span class="label label-green">GIỚI THIỆU</span>
   </div>
   <p class="mg-top-md mg-bottom-md">
       CHÀO MỪNG BẠN ĐẾN VỚI CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN !<br/>
       Công ty TNHH phát triển công nghiệp Sài Gòn chuyên cung cấp các giải pháp bảo vệ hàng hóa xuất khẩu trong container.<br />
       Sử dụng chất hút ẩm trong đóng gói sản phẩm, trong các thùng hàng, kiện hàng và trong container. Sử dụng túi khí để... <br />
   </p>
   <div class="seemore">
     <a href="{{route('fe.introduce')}}">
         Xem tiếp <span class="seemore-icon"></span>
     </a>
   </div>
   <div>
       <span class="label label-green">Sản phẩm</span>
   </div>
   <div class="products">
       <div class="row">
           @if( !empty($products) )
           @foreach($products as $items)
           <div class="col-xs-6 col-sm-3">
               <div class="product-holder">
                   <a href="{{route('fe.viewProduct',['id'=>$items->id])}}" class="product-thumbnail">
                       <img class="img-responsive" src="{{asset('upload/img/'.$items->image)}}" />
                   </a>
                   <span class="product-name">
                       <a href="{{route('fe.viewProduct',['id'=>$items->id])}}">{{$items->slug}}</a>
                   </span>
               </div>
           </div>
           @endforeach
           @endif
       </div>
   </div>
@endsection