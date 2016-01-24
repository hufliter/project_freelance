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
            <li class="page-scroll"><a class="nav-text" href="#page-top">Trang Chủ</a></li>
            <li class="page-scroll"><a class="nav-text" href="#1">Giới Thiệu</a></li>
            <li class="page-scroll"><a class="nav-text" href="#3">Sản Phẩm</a></li>
            <li class="page-scroll active-item" ><a href="/" ><img style="height:40px; width:50px;" src="{{asset('img/logo.png')}}" alt="Not Found"/></a></li>
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
            <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="280" data-hoffset="0" data-x="center" style=" color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px; font-family: 'Open Sans', sans-serif; font-weight: bold; " >
              CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN
            </div>
            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="350" data-hoffset="0" data-x="center" style="color: #fff; font-size: 26px; font-weight: bold ;text-transform: uppercase; letter-spacing: 10px; " >
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
              font-family: 'Open Sans', sans-serif; font-weight: bold; "
              >
              CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN
            </div>
            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="350" data-hoffset="0" data-x="center"
              style="color: #fff;
              font-size: 26px;
              text-transform: uppercase;
              letter-spacing: 10px; font-weight: bold;
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
              font-family: 'Open Sans', sans-serif; font-weight: bold;
              "
              >
              CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN
            </div>
            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="350" data-hoffset="0" data-x="center"
              style="color: #fff;
              font-size: 26px;
              text-transform: uppercase;
              letter-spacing: 10px; font-weight:bold;
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
              font-family: 'Open Sans', sans-serif; font-weight: bold;
              "
              >
              CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN
            </div>
            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="350" data-hoffset="0" data-x="center"
              style="color: #fff;
              font-size: 26px;
              text-transform: uppercase;
              letter-spacing: 10px; font-weight:bold;
              "
              >
              CHẤT LƯỢNG LÀM NỀN TẢNG ĐỂ PHÁT TRIỂN
            </div>
          </li>

          <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on"  data-title="SaiGon Industrial Development Slide">
            <!-- MAIN IMAGE -->
            <img src="{{asset('img/dummy.png')}}"  alt="2" data-lazyload="{{asset('img/slider/anh-6.png')}}" data-bgposition="right top" data-kenburns="off" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
            <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="280" data-hoffset="0" data-x="center"
              style="color: #fff;
              text-transform: uppercase;
              font-size: 40px;
              letter-spacing: 6px;
              font-family: 'Open Sans', sans-serif; font-weight: bold;
              "
              >
              CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN
            </div>
            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="350" data-hoffset="0" data-x="center"
              style="color: #fff;
              font-size: 26px;
              text-transform: uppercase;
              letter-spacing: 10px; font-weight:bold;
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

  <div class="container-fluid no-padding" style="background-image:url('{{ asset('img/bg-welcome.jpg') }} ')">
    <div class="container padding80">
      <div class="col-md-8 col-md-offset-2 text-center" id="1">
        <h2 class="uppercase" style="color:white">CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN</h2>
      </div>
      <div class="container">
      <div class="section-info ">
        <div class="col-md-12">
          @if( !empty($introduce) )
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading" style="text-align:center;">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne1" style="font-size:14pt; color:white ;text-shadow: 1px 1px 1px black;">
                  {{$introduce->title}}
                  <span class="fa fa-plus" style="left:460px;"></span>
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
             
        <ul class="nav nav-pills filter" data-option-key="filter">
        @if( !empty($category) )
          <li><a class="selected" href="#filter" style="color:white;" data-option-value="*">All</a></li>
          @foreach($category as $item)
            @if( !empty($item->is_active == 1) ) 
              <li><a href="#filter" style="color:white;" data-option-value=".{{$item->filter_cate_name}}">{{$item->name}}</a></li>
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
                    <h2 >{{$items->slug}}</h2>
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

    <div class="clearfix"></div>
    <div class="padding80 border-top">
      <div class="container" id="2">
      <div class="col-md-8 col-md-offset-2 text-center space50">
        <h2>Hỗ trợ kĩ thuật</h2>
        <p>Đây là các nội dung chi tiết về những kiến thức bảo quản chống ẩm hàng hóa.</p>
      </div>
      <div class="row">
        @if(!empty($technical))
        @foreach($technical as $items)
        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-box-icon">
              <a href="{{$items->url}}" target="_blank"><i class="icon-cog3"></i></a>
            </div>
            <div class="feature-box-info">
              <h4><a href="{{$items->url}}" target="_blank">{{$items->name}}</a></h4>
              <p>&nbsp;</p>
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
          <p>Hãy liên hệ ngay cho chúng tôi nếu quý khách có nhu cầu sử dụng sản phẩm của chúng tôi<br>
          Mọi thắc mắc của quý khách sẽ được chúng tôi giải đáp nhanh chóng.</p>
        </div>
              <div class="space40"></div>

      <div class="col-md-6 full-contact">
            <div class="space50"></div>
            <h4 class="no-margin">Công Ty Phát Triển Công Nghiệp Sài Gòn</h4>
            <div class="space20"></div>
            <ul class="contact-info">
              <li>
                <p><strong><i class="fa fa-map-marker"></i> Địa Chỉ:</strong> Tầng M, An Phú Plaza, 117-119 Lý Chính Thắng, Phường 7, Quận 3, TP.HCM</p>
              </li>
              <li>
                <p><strong><i class="fa fa-phone"></i> ĐT:</strong> (0650) 3680154 - 3680153 </p>
              </li>
              <li>
                <p><strong><i class="fa fa-print"></i> Fax:</strong> (0650) 3680155 </p>
              </li>
              <li>
                <p><strong><i class="fa fa-skype"></i> Skype: </strong> <a href="skype:saigon-id?chat">saigon-id</a></p>
              </li>
		<li>
                <p><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="#">info@saigonid.com</a> / <a href="#">sales@saigonid.com</a></p>
              </li>
		<li>
                <p><strong><i class="fa fa-globe"></i> Website:</strong> saigonid.com</p>
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
