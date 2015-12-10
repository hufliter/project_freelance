@extends('frontend.layout.index')
@section('content')
@if(!empty($data))
<!-- PAGE HEADER -->
    <div class="page_header">
        <div class="page_header_parallax">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3><span>{{$data->slug}}</span>{{$data->name}}</h3>
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
                <div class="col-md-9">
                    <div id="blog-slider" class="owl-carousel owl-theme">
                    @foreach($data->image as $img)
                        <div class="item">                      
                            <img src="{{ asset('upload/img/'.$img) }}" class="img-responsive" alt="">
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fs-info">
                        <h3>{{$data->slug}}</h3>
                        <p>{{$data->description}}</p>
                        <div class="clearfix space20"></div>
                        <ul class="project-meta">
                            <li><i class="icon-tag2"></i>Kích thước: - {{$data->size}} </li>
                            <li><i class="icon-tag2"></i>Trọng Lượng: - {{$data->weight}} </li>
                            <li><i class="icon-file2"></i><span class="project_client">Kiểu Đóng gói: - {{$data->package}}</span></li>
                            <li><i class="icon-file2"></i><span class="project_client">Ngôn ngữ : - {{$data->words}}</span></li>
                            <li><i class="icon-link3"></i>Hàn: - {{$data->solder}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix space30"></div>
            <h4 class="uppercase">Sản Phẩm Tiêu Biểu</h4>
            <hr>
            <div id="portfolio-home" class="isotope gutter folio-boxed-4col">
                <div class="project-item photography branding">
                    <a href="./portfolio-single-slider.html">
                        <div class="project-gal">
                            <img src="images/projects/1.jpg" class="img-responsive" alt="Not found">
                            <div class="overlay-folio2">
                                <div class="project-info">
                                    <h2>Aliquam tincidunt risus.</h2>
                                    <p>Web , Creative</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="project-item illustration web-design illustration">
                    <a href="./portfolio-single-slider.html">
                        <div class="project-gal">
                            <img src="images/projects/2.jpg" class="img-responsive" alt="Not found">
                            <div class="overlay-folio2">
                                <div class="project-info">
                                    <h2>Vestibulum auctor</h2>
                                    <p>Image Gallery</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="project-item illustration print">
                    <a href="./portfolio-single-slider.html">
                        <div class="project-gal">
                            <img src="images/projects/3.jpg" class="img-responsive" alt="Not found">
                            <div class="overlay-folio2">
                                <div class="project-info">
                                    <h2>Vestibulum auctor</h2>
                                    <p>Image Gallery</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="project-item photography web-design">
                    <a href="./portfolio-single-slider.html">
                        <div class="project-gal">
                            <img src="images/projects/4.jpg" class="img-responsive" alt="Not found">
                            <div class="overlay-folio2">
                                <div class="project-info">
                                    <h2>Vestibulum auctor</h2>
                                    <p>Image Gallery</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection