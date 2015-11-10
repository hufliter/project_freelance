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

            {!! Form::model($product, array('route' => array('products.postEdit', $product->id), 'method' => 'POST', 'file'=>true)) !!}
                <div class="form-group">
                    {!! Form::hidden('id') !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Product Code') !!}
                    {!! Form::text('slug', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Product Code')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Product Name') !!}
                    {!! Form::text('name', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Product Name')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Usage') !!}
                    {!! Form::textarea('usage', null ,
                        array('required',
                                'class'=>'form-control',
                                'placeholder' => 'Product Usage')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Category') !!}
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
                    {!! Form::label('Description') !!}
                    {!! Form::textarea('description', null ,
                        array('required',
                                'class'=>'form-control',
                                'placeholder' => 'Product Description')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Active') !!}
                    {!! Form::checkbox('is_active', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Active')) !!}
                </div>
                <a class="btn btn-primary" href="{{route('products.index')}}">Back</a>
            {!! Form::submit('Edit Product!', array('class' => 'btn btn-info')) !!}

            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection