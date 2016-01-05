@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-edit"></i> Edit Product {{$product->slug}}</h2>

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

            {!! Form::model($product, array('route' => array('products.postEdit', $product->product_id), 'method' => 'POST', 'files'=>true)) !!}
                <div class="form-group">
                    {!! Form::hidden('product_id') !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Mã sản phẩm') !!}
                    {!! Form::text('slug', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Mã sản phẩm')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Loại sản phẩm') !!}
                    @if(!empty($cate))
                        <select name="cate_id" class="form-control">
                            @foreach($cate as $items)
                                <option class="h4" value="{{$items->id}}">{{$items->name}}</option>
                                <option class="offset-by-one" value="{{$items->child_id}}">{{$items->child_name}}</option>
                            @endforeach
                        </select>
                    @endif
                </div>

                <div class="form-group">
                    {!! Form::label('Tên sản phẩm') !!}
                    {!! Form::text('product_name', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Tên sản phẩm')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Mô tả') !!}
                    {!! Form::textarea('usage', null ,
                        array('class'=>'form-control',
                                'placeholder' => 'Mô tả sản phẩm')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Hình ảnh') !!}
                    {!! Form::file('file_upload[]', array('multiple'=>true)) !!}
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        @foreach($product->image as $image)
                        <div class="col-md-2 nopadding">
                            <img class="img-thumbnail" src="{{asset('upload/img/'.$image)}}">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('kích thước') !!}
                    <small>(Ví dụ: 220 x 120 x 40 (mm) hoặc (... ngăn) )</small>
                    {!! Form::text('size', null,
                        array( 'class'=>'form-control', 'placeholder'=>'Size')
                        ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Trọng Lượng') !!}
                    <small>(đơn vị: gram )</small>
                    {!! Form::text('weight', null,
                        array( 'class'=>'form-control', 'placeholder'=>'Trọng Lượng')
                        ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Bao Bì') !!}
                    <small>(Ví dụ: vải hoặc lụa )</small>
                    {!! Form::text('package', null,
                        array( 'class'=>'form-control', 'placeholder'=>'Bao Bì')
                        ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Hàn') !!}
                    <small>(Ví dụ: biên hoặc bụng)</small>
                    {!! Form::text('solder', null,
                        array( 'class'=>'form-control', 'placeholder'=>'Hàn')
                        ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Ngôn Ngữ') !!}
                    {!! Form::text('words', null,
                        array( 'class'=>'form-control', 'placeholder'=>'Ngôn Ngữ')
                        ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Ứng dụng') !!}
                    {!! Form::textarea('product_description', null,
                        array('required',
                                'class'=>'form-control',
                                'placeholder' => 'Ứng dụng')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Kích hoạt') !!}
                    {!! Form::checkbox('product_active') !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Sản phẩm nổi bật') !!}
                    {!! Form::checkbox('is_popular', 1,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Sản phẩm nổi bật')) !!}
                </div>
                <a class="btn btn-primary" href="{{route('products.index')}}">Quay lại</a>
            {!! Form::submit('Chỉnh sửa sản phẩm!', array('class' => 'btn btn-info')) !!}

            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection