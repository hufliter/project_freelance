<div class="custom-box">
   <div class="box-header">
       Danh mục sản phẩm
   </div>
   <div class="box-content">
       <ul class="custom-list">
       @if(!empty($cate))
           @foreach($cate as $items)
           @if( $items->is_active == 1)
            <li>
                @if( $items->parent_id == 0 )
                <a href="{{route('fe.products',['cate'=>$items->id])}}">{{$items->name}}</a>
                @endif
                @if( $items->parent_id != 0 )
                <ul>
                    <li><a href="{{route('fe.products',['cate'=>$items->id])}}">{{$items->name}}</a></li>
                </ul>
                @endif
            </li>
           @endif
           @endforeach
       @endif
       </ul>
   </div>
</div>
