@extends('admin.layout.index')
@section('content')
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-edit"></i> Tạo Sản Phẩm</h2>

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
            {!! Form::open(array('route' => array('products.postCreate'), 'method' => 'POST', 'files' => true)) !!}
                <div class="form-group">
                    {!! Form::label('Mã Sản Phẩm') !!}
                    {!! Form::text('slug', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Mã Sản Phẩm')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Loại Sản Phẩm') !!}
                    @if(!empty($cate))
                        <select name="cate_id" class="form-control">
                            @foreach($cate as $items)
                                <option class="h4" value="{{$items->id}}">{{$items->name}}</option>
                                <!-- <option class="offset-by-one" value="{{$items->child_id}}">{{$items->child_name}}</option> -->
                            @endforeach
                        </select>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('Tên Sản Phẩm') !!}
                    {!! Form::text('name', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Tên Sản Phẩm')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Hình Ảnh') !!}
                    {!! Form::file('file_upload[]', array('multiple'=>true)) !!}
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
                    {!! Form::label('Thêm Mô Tả') !!}
                    <small>(Thêm các mô tả chi tiết hơn về sản phẩm)</small>
                    {!! Form::textarea('usage', null,
                        array(
                            'class'=>'form-control',
                            'placeholder'=>'Thêm Mô Tả')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Ứng Dụng') !!}
                    {!! Form::textarea('description', null,
                        array(
                            'required',
                            'class'=>'form-control',
                            'placeholder'=>'Ứng Dụng')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Kích hoạt') !!}
                    {!! Form::checkbox('is_active', 1,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Kích hoạt')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Sản phẩm nổi bật') !!}
                    {!! Form::checkbox('is_popular', 1,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Sản phẩm nổi bật')) !!}
                </div>
                {!! Form::submit('Tạo Sản Phẩm!', array('class' => 'btn btn-primary')) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection