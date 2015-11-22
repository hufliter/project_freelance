<!DOCTYPE html><html lang="vi">
<head>
    <title>Saigon Industrial Development</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta property="og:locale" content="vi_VN" />

    <link href="{{asset('bootstrap-3.3.2/css/bootstrap.css')}}" media="screen" rel="stylesheet" type="text/css">
<!--    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300&subset=latin,vietnamese' rel='stylesheet' type='text/css'>-->
    <link href="{{asset('/css/custom.css')}}" media="screen" rel="stylesheet" type="text/css">
<!--    <link href="/freelancer/asset/bxslider/jquery.bxslider.css" media="screen" rel="stylesheet" type="text/css">-->
<!--    <link href="/freelancer/asset/css/bxslider-custom.css" media="screen" rel="stylesheet" type="text/css">-->
</head><body>
    <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="inline-block">
                            <h4 id="logo-holder">
                                <img class="pull-left" src="{{asset('img/logo.png')}}" alt="Logo" id="logo">
                                <p>CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN <br>SAIGON INDUSTRIAL DEVELOPMENT Co.,Ltd</p>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p class="col-xs-12" id="slogan">CHẤT LƯỢNG LÀM NỀN TẢNG ĐỂ PHÁT TRIỂN</p>
                </div>
            </div>
        </div>


   <div id="container">
           <div class="container">
               <div class="row">
                   <div class="col-xs-12 text-right">
                       <form class="form-inline">
                           <div class="form-group">
                               <input type="text" class="form-control custom-input" id="" placeholder="Nhập từ khoá">
                           </div>
                           <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                       </form>
                   </div>
               </div>
           </div>
       </div>

       <nav class="navbar">
           <div class="container">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="main-nav" aria-expanded="false">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
               </div>

               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="main-nav">
                   <ul class="nav navbar-nav">
                       <li class="active"><a href="{{route('fe.index')}}">Trang chủ</a></li>
                       <li><a href="{{route('fe.introduce')}}">Giới thiệu</a></li>
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản Phẩm <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                               <li><a href="#">Action</a></li>
                               <li><a href="#">Another action</a></li>
                               <li><a href="#">Something else here</a></li>
                               <li><a href="#">Separated link</a></li>
                               <li><a href="#">One more separated link</a></li>
                           </ul>
                       </li>
                       <li><a href="#">Ứng Dụng</a></li>
                       <li><a href="{{route('fe.technical')}}">Kỹ Thuật</a></li>
                       <li><a href="{{route('fe.news')}}">Tin Tức</a></li>
                       <li><a href="{{route('fe.recruitment')}}">Tuyển dụng</a></li>
                       <li><a href="{{route('fe.contact')}}">Liên Hệ</a></li>
                   </ul>
               </div><!-- /.navbar-collapse -->
           </div><!-- /.container-fluid -->
       </nav>

       <div id="body">
           <div class="container">
               <div class="row">
                   <!-- start the left sidebar -->
                   <div class="col-xs-12 col-sm-3">
                       @include('frontend.partials.category')

                       <div class="contact-box text-center">
                           <img src="{{asset('img/helper.png')}}" alt="Helper logo" />
                           <div class="row mg-top-nm">
                               <div class="col-xs-6">
                                   <img src="http://opi.yahoo.com/online?u=ngonam22&m=g&t=2" class="img-responsive"/>
                               </div>
                               <div class="col-xs-6 skype_status">
                                   <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
                                   <div id="SkypeButton_Call_ngonam22_1">
                                       <script type="text/javascript">
                                           Skype.ui({
                                               "name": "chat",
                                               "element": "SkypeButton_Call_ngonam22_1",
                                               "participants": ["ngonam22"],
                                               "imageSize": 16
                                           });
                                       </script>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- weather module -->
                       <iframe class="mg-top-md mg-bottom-md" frameborder="0" marginwidth="0" marginheight="0" src="http://thienduongweb.com/tool/weather/?r=1&w=1&g=0&col=1&d=0" width="100%" height="480" scrolling="yes"></iframe>

                   </div>
                   <!-- end sidebar -->

                   <!-- body starts here -->
                   <div class="col-xs-12 col-sm-9">
                       <div id="main-carousel" class="carousel slide" data-ride="carousel">

                           <div class="carousel-inner" role="listbox">
                               <div class="item active">
                                   <img src="http://wallstreetenglish.edu.vn/files/images/image-site/slider-november-2015/930x260interview.jpg" alt="hello" />
                               </div>
                               <div class="item">
                                   <img src="http://wallstreetenglish.edu.vn/files/images/image-site/slider-november-2015/930x260class-pass.jpg" alt="asd" />
                               </div>
                           </div>

                           <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                               <span class="sr-only">Previous</span>
                           </a>
                           <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                               <span class="sr-only">Next</span>
                           </a>
                       </div>
                       @yield('content')

                   </div>
                   <!-- end body part -->
               </div>
           </div>
       </div>

       <footer id="footer">
           <div class="container">
               <div class="row">
                   <div class="col-xs-12 col-sm-6">
                       <h5>Thông tin</h5>
                       <h6>CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN</h6>
                       <address>
                           <p>Phone: <a href="">01656343</a></p>
                           <p>Email: <a href="mailto:webmaster@example.com">a@example.com</a></p>
                           <p>Fax: 012312</p>
                       </address>
                   </div>
                   <div class="col-xs-12 col-sm-6">

                   </div>
               </div>
           </div>
       </footer>
    <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body></html>