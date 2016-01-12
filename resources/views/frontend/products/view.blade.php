@extends('frontend.layout.index')
@section('content')
<div class="header-wrap">
  <!-- HEADER -->
  <header id="header-main">
    <div class="container">
      <div class="navbar yamm navbar-default">
        <div class="navbar-header" style="padding: 12px 10px 10px;">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">
            <i class="fa fa-phone nav-text" style="font-size: 14px;">&nbsp; HOTLINE: 0903 367 715</i>
          </a>
        </div>

        <!-- SEARCH -->
        <div class="header-x pull-right" style="padding: 25px 10px 10px;">
          <div class="s-search">
            <div class="ss-trigger"><i class="icon-search2"></i></div>
            <div class="ss-content">
              <span class="ss-close icon-cross2"></span>
              <div class="ssc-inner">
                <form>
                  <input type="text" placeholder="Type Search text here...">
                  <button type="submit"><i class="icon-search2"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div 
        id="navbar-collapse-1" 
        class="navbar-collapse collapse navbar-right"
        style="font-family: arial; font-weight: bold;">
          <ul class="nav navbar-nav">
            <li class="page-scroll"><a class="nav-text" href="{{ route('fe.index') }}#page-top">Trang Chủ</a></li>
            <li class="page-scroll"><a class="nav-text" href="{{ route('fe.index') }}#1">Giới Thiệu</a></li>
            <li class="page-scroll"><a class="nav-text" href="{{ route('fe.index') }}#3">Sản Phẩm</a></li>
            <li class="page-scroll active-item"><a href="/" ><img src="{{asset('img/logo.png')}}" style="width: 50px; height: 40px;" alt="Not Found"/></a></li>
            <li class="page-scroll"><a class="nav-text" href="{{ route('fe.index') }}#2">Hỗ trợ kĩ thuật</a></li>
            <!-- <li class="page-scroll"><a href="#4">Tỉ Giá & Thời Tiết</a></li> -->
            <!-- <li class="page-scroll"><a href="#6">Kĩ Thuật</a></li> -->
            <li class="page-scroll"><a class="nav-text" href="{{ route('fe.index') }}#5">Tin Tức</a></li>
            <li class="page-scroll"><a class="nav-text" href="{{ route('fe.index') }}#7">Liên Hệ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
</div>
@if(!empty($data))
<!-- PAGE HEADER -->
    <div class="page_header">
        <div class="page_header_parallax">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>
                        @if($data->slug)
                        <span>{{$data->slug}}</span>
                        @endif
                        @if($data->name)
                        {{$data->name}}
                        @endif
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="bcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="bcrumbs">
                            <li><a href="/"><i class="fa fa-home"></i> Trang Chủ</a></li>
                            <li>Chi Tiết Sản Phẩm</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- INNER CONTENT -->
    <div class="inner-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div id="blog-slider" class="owl-carousel owl-theme">
                    @foreach($data->image as $img)
                        <div class="item">
                            <!-- Image need set 700x450 to view beauty -->                      
                            <img src="{{ asset('upload/img/'.$img) }}" class="img-responsive" alt="" style="height: 450px; width: 700px;">
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="fs-info">
                        <h3>{{$data->slug}}</h3>
                        @if($data->usage)
                        <span style="font-size:16px;">{{$data->usage}}</span>
                        @endif
                        <div class="clearfix space20"></div>
                        <ul class="project-meta">
                            @if($data->size)
                            <li>
                                <i class="icon-tag2"></i><b>Kích thước</b>: {{ $data->size }} mm
                            </li>
                            @endif
                            
                            @if($data->weight)
                            <li>
                                <i class="icon-tag2"></i><b>Trọng Lượng:</b> {{ $data->weight }} gram 
                            </li>
                            @endif
                            
                            @if($data->package)
                            <li>

                                <i class="icon-tag2"></i><b>Bao Bì: </b> {{ $data->package }}
                            </li>
                            @endif
                            
                            @if($data->words)
                            <li>
                                <i class="icon-tag2"></i><b>Ngôn ngữ: </b> {{ $data->words }}</span>
                            </li>
                            @endif

                            @if($data->solder)
                            <li>
                                <i class="icon-tag2"></i><b>Hàn:</b> {{ $data->solder }}
                            </li>
                            @endif

                            <li>
                                <i class="icon-tag2"></i><b>Giá:</b> <a href="{{URL::to('/#7')}}" target="_blank">Vui lòng click vào đây để biết chi tiết thông tin liên hệ</a>
                            </li>
                            
                            @if($data->description)
                            <li>
                                <i class="icon-tag2"></i><b>Ứng dụng:</b> {{$data->description}}
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix space30"></div>
            <h4 class="uppercase">Sản Phẩm Cùng Loại</h4>
            <hr>
            <div id="portfolio-home" class="isotope gutter folio-boxed-4col">
                @if(!empty($popularData))
                @foreach($popularData as $pi)
                <div class="project-item photography branding">
                    <a href="{{route('fe.viewProduct',['id'=>$pi->id])}}">
                        <div class="project-gal">
                            <img src="{{ asset('upload/img/'.$pi->image) }}" class="img-responsive" alt="Not found" style="height:177px;">
                            <div class="overlay-folio2">
                                <div class="project-info">
                                    <h2>{{$pi->slug}}</h2>
                                    <p>{{$pi->name}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
@endif
@endsection