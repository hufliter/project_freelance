@extends('frontend.layout.index')
@section('content')
<div class="header-wrap">
  <!-- HEADER -->
  <header id="header-main">
    <div class="container">
      <div class="navbar yamm navbar-default">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a href="/" class="navbar-brand"><img src="{{asset('img/logo.png')}}" width="40" style="width: 40px; height: 30px;" alt="Not Found"/></a>
        </div>

        <!-- SEARCH -->
        <div class="header-x pull-right">
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
            <li class="page-scroll"><a class="nav-text" href="#page-top">Trang Chủ</a></li>
            <li class="page-scroll"><a class="nav-text" href="#1">Giới Thiệu</a></li>
            <li class="page-scroll"><a class="nav-text" href="#3">Sản Phẩm</a></li>
            <li class="page-scroll"><a class="nav-text" href="#2">Hỗ trợ kĩ thuật</a></li>
            <li class="page-scroll"><a class="nav-text" href="#5">Tin Tức</a></li>
            <li class="page-scroll"><a class="nav-text" href="#7">Liên Hệ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
</div>
  <!-- SLIDER -->
  <div class="slider-wrap">
    <div class="tp-banner-container">
      <div class="tp-banner" >
        <ul>
          <!-- SLIDE  -->
          <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on"  data-title="SaiGon Industrial Development Slide">
            <!-- MAIN IMAGE -->
            <img src="{{asset('img/dummy.png')}}"  alt="2" data-lazyload="{{asset('img/slider/anh-1.png')}}" data-bgposition="right top" data-kenburns="off" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
            <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="280" data-hoffset="0" data-x="center"
              style="    color: #fff;
              text-transform: uppercase;
              font-size: 40px;
              letter-spacing: 6px;
              font-family: Open Sans;
              font-weight: 400;
              "
              >
              CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN
            </div>
            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="350" data-hoffset="0" data-x="center"
              style="    color: #fff;
              font-size: 13px;
              text-transform: uppercase;
              letter-spacing: 10px;
              "
              >
              CHẤT LƯỢNG LÀM NỀN TẢNG ĐỂ PHÁT TRIỂN
            </div>
            <div style="float:left; margin-right:20px;">
            </div>
          </li>

          <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on"  data-title="SaiGon Industrial Development Slide">
            <!-- MAIN IMAGE -->
            <img src="{{asset('img/dummy.png')}}"  alt="2" data-lazyload="{{asset('img/slider/anh-2.png')}}" data-bgposition="right top" data-kenburns="off" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
            <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="280" data-hoffset="0" data-x="center"
              style="    color: #fff;
              text-transform: uppercase;
              font-size: 40px;
              letter-spacing: 6px;
              font-family: Montserrat;
              font-weight: 400;
              "
              >
              CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN
            </div>
            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="350" data-hoffset="0" data-x="center"
              style="    color: #fff;
              font-size: 13px;
              text-transform: uppercase;
              letter-spacing: 10px;
              "
              >
              CHẤT LƯỢNG LÀM NỀN TẢNG ĐỂ PHÁT TRIỂN
            </div>
          </li>

          <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on"  data-title="SaiGon Industrial Development Slide">
            <!-- MAIN IMAGE -->
            <img src="{{asset('img/dummy.png')}}"  alt="2" data-lazyload="{{asset('img/slider/anh-3.png')}}" data-bgposition="right top" data-kenburns="off" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
            <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="280" data-hoffset="0" data-x="center"
              style="    color: #fff;
              text-transform: uppercase;
              font-size: 40px;
              letter-spacing: 6px;
              font-family: Montserrat;
              font-weight: 400;
              "
              >
              CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN
            </div>
            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="350" data-hoffset="0" data-x="center"
              style="    color: #fff;
              font-size: 13px;
              text-transform: uppercase;
              letter-spacing: 10px;
              "
              >
              CHẤT LƯỢNG LÀM NỀN TẢNG ĐỂ PHÁT TRIỂN
            </div>
          </li>

          <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on"  data-title="SaiGon Industrial Development Slide">
            <!-- MAIN IMAGE -->
            <img src="{{asset('img/dummy.png')}}"  alt="2" data-lazyload="{{asset('img/slider/anh-5.png')}}" data-bgposition="right top" data-kenburns="off" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
            <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="280" data-hoffset="0" data-x="center"
              style="    color: #fff;
              text-transform: uppercase;
              font-size: 40px;
              letter-spacing: 6px;
              font-family: Montserrat;
              font-weight: 400;
              "
              >
              CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN
            </div>
            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="350" data-hoffset="0" data-x="center"
              style="    color: #fff;
              font-size: 13px;
              text-transform: uppercase;
              letter-spacing: 10px;
              "
              >
              CHẤT LƯỢNG LÀM NỀN TẢNG ĐỂ PHÁT TRIỂN
            </div>
          </li>

          <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on"  data-title="SaiGon Industrial Development Slide">
            <!-- MAIN IMAGE -->
            <img src="{{asset('img/dummy.png')}}"  alt="2" data-lazyload="{{asset('img/slider/anh-6.png')}}" data-bgposition="right top" data-kenburns="off" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
            <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="280" data-hoffset="0" data-x="center"
              style="    color: #fff;
              text-transform: uppercase;
              font-size: 40px;
              letter-spacing: 6px;
              font-family: Montserrat;
              font-weight: 400;
              "
              >
              CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN
            </div>
            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="350" data-hoffset="0" data-x="center"
              style="    color: #fff;
              font-size: 13px;
              text-transform: uppercase;
              letter-spacing: 10px;
              "
              >
              CHẤT LƯỢNG LÀM NỀN TẢNG ĐỂ PHÁT TRIỂN
            </div>
          </li>
          <!--End Slide -->
        </ul>
      <div class="tp-bannertimer"></div>
      </div>
    </div>
  </div>

  <!-- INNER CONTENT -->

  <div class="container-fluid no-padding" style="background-image:url('{{ asset('img/pattern/pattern3.png') }} ')">
    <div class="container padding80">
      <div class="col-md-8 col-md-offset-2 text-center space50" id="1">
        <h2 class="uppercase">Chào Mừng Bạn Đến Với Công Ty TNHH Phát Triển Công Nghiệp Sài Gòn!</h2>
        <p>Công ty phát triển công nghiệp Sài Gòn.<br/>
        Saigon industrial development Co.,Ltd
        </p>
      </div>
      <div class="container">
      <div class="section-info ">
        <div class="col-md-12">
          @if( !empty($introduce) )
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne1">
                  {{$introduce->title}}
                  <span class="fa fa-plus"></span>
                  </a>
                </h4>
              </div>
              <div id="collapseOne1" class="panel-collapse collapse">
                <div class="panel-body">
                  {!! base64_decode($introduce->content); !!}
                </div>
              </div>
            </div>
          </div>
          @endif
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    </div>
    
  </div>
  
  
    <div class="clearfix"></div>
    <div class="clearfix space90"></div>
  
      <!-- <section id="portfolio-section"> -->
    <div class="container container-full" id="3">
      <section id="portfolio-section">
        <div class="container">
          <h3 class="uppercase text-center">Sản Phẩm</h3>
        </div>
             
        <ul class="filter" data-option-key="filter">
        @if( !empty($category) )
          <li><a class="selected" href="#filter" data-option-value="*">All</a></li>
          @foreach($category as $item)
            @if( !empty($item->is_active == 1) ) 
              <li><a href="#filter" data-option-value=".{{$item->filter_cate_name}}">{{$item->name}}</a></li>
            @endif
          @endforeach
        @endif
        </ul>
        
        <div id="portfolio-home" class="isotope folio-boxed-3col" style="position: relative; height: 867px;">
          @if( !empty($product) )
          @foreach( $product as $items )
          <div class="project-item {{$items->filter_name}}" style="position: absolute; left: 0px; top: 0px;">
            <a href="{{ route('fe.viewProduct',['id'=>$items->product_id]) }}">
              <div class="project-gal">
              <!-- Should add natural image with dimension 700x450 -->
                <img src="{{asset('upload/img/'.$items->image)}}" class="img-responsive" alt="Not Found" style="height: 290px;">
                <div class="overlay-folio2">
                  <div class="project-info">
                    <h2>{{$items->slug}}</h2>
                    <!-- Admin should update add name product -->
                    <p>{{$items->product_name}}</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          @endforeach
          @endif
        </div>
      </section>
    </div>
    <div class="padding80 border-top">
      <div class="container" id="2">
      <div class="col-md-8 col-md-offset-2 text-center space50">
        <h2>Hỗ trợ kĩ thuật</h2>
        <p>Đây là các nội dung chi tiết về các thông số kĩ thuật cũng như các cách thức sử dụng sản phẩm của chúng tôi.</p>
      </div>
      <div class="row">
        @if(!empty($technical))
        @foreach($technical as $items)
        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-box-icon">
              <a href="{{$items->url}}" target="_blank" ><i class="icon-cog3"></i></a>
            </div>
            <div class="feature-box-info">
              <h4><a href="{{$items->url}}" target="_blank">{{$items->name}}</a></h4>
            </div>
          </div>
        </div>
        @endforeach
        @endif
      </div>
      
    </div></div>
      
    <div class="border-top padding80">
    <div class="container home-blog" id="5">
      <div class="text-center space40">
        <h2 class="title uppercase">TIN TỨC</h2>
        <p>Tin Tức Kinh Doanh/Quân Sự</p>
      </div>
      <div class="row">
      @if(!empty($news))
      @foreach($news as $title => $items)
        <div class="col-md-4" style="padding-bottom:10px">
          <div class="hb-info">
            <div class="hb-thumb">
              <img style="width: 100%;" src="{{$items['img']}}" class="img-responsive" alt="Not Found"/>
            </div>
            <h4 title="{{$title}}"><a href="{{$items['link']}}" target="_blank" class="title-wrap">{{$title}} </a></h4>
            <p class="content-wrap">{!!$items['content']!!}</p>
            <a href="{{$items['link']}}" class="readmore" target="_blank">Chi Tiết...</a>
          </div>
        </div>
      @endforeach 
      @endif
      </div>
    </div>
  </div>

  <div class="space80"></div>
  <!-- Contact us -->
  <div class="border-top"></div>
  <div class="container-fluid no-padding" id="7">
    <div>
        <div class="text-center">
          <h2 class="title uppercase">Liên Hệ</h2>
          <p>Hãy liên hệ ngay cho chúng tôi nếu bạn có nhu cầu sử dụng sản phẩm của chúng tôi<br>
          Mọi thắc mắc của bạn sẽ được chúng tôi giải đáp nhanh chóng.</p>
        </div>
              <div class="space40"></div>

      <div class="col-md-6 full-contact">
            <div class="space50"></div>
            <h3 class="no-margin">Thông Tin Liên Hệ</h3>
            <div class="space20"></div>
            <ul class="contact-info">
              <li>
                <p><strong><i class="fa fa-map-marker"></i> Địa Chỉ:</strong> An Phu Plaza, 117-119 Lý Chính Thắng,  phường 7, Quận 3, TP.HCM</p>
              </li>
              <li>
                <p><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="#">info@saigonindeco.com</a></p>
              </li>
              <li>
                <p><strong><i class="fa fa-phone"></i> Số Điện Thoại:</strong> 0995 230 930 </p>
              </li>
              <li>
                <p><strong><i class="fa fa-print"></i> Fax:</strong> +91 2345 2132</p>
              </li>
              <li>
                <p><strong><i class="fa fa-skype"></i> Skype: </strong> <a href="skype:saigonindeco?chat">saigonindeco</a></p>
              </li>
            </ul>
      </div>
      <div class="col-md-6 no-padding">
        <div class="map-greyscale" id="map-greyscale"></div>
      </div>
    </div>
  </div>
  <!--End Contact us -->

</div>
@endsection