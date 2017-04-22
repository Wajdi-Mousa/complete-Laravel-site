<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <title>
موقع بيع الأثاث | مرحبا بك

  @yield('title')

    </title>
  @yield('header')

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {!! Html::style('website/css/bootstrap.min.css') !!}
  {!! Html::style('website/css/flexslider.css') !!}
  {!! Html::style('website/css/style.css') !!}
  {!! Html::style('website/css/font-awesome.min.css') !!}
  {!! Html::script('website/js/jquery.min.js') !!}
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>

</head>

<body style="direction:rtl">
  <div class="header">
    <div class="container"> <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-paper-plane"></i> البيت الذهبى</a>
      <div class="menu pull-right"> <a class="toggleMenu" href="#"><img src="/website/images/nav_icon.png" alt="" /> </a>
        <ul class="nav" id="nav">
          <li class="current"><a href="{{ url('/home') }}">الرئيسية</a></li>
          <li><a href="about.html">من نحن</a></li>
          <li><a href="services.html">خدماتنا</a></li>
          <li><a href="contact.html">تواصل معنا</a></li>

          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a href="{{ route('login') }}">تسجيل دخول</a></li>
              <li><a href="{{ route('register') }}">تسجيل عضوية</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              تسجيل خروج
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif

          <div class="clear"></div>
        </ul>

      </div>
    </div>
  </div>
  @yield('content')


  <div class="banner text-center">
    <div class="container">
      <div class="banner-info">
        <h1>أهلا وسهلا بكم</h1>
        <p>يسعدنا ويشرفنا الإالتقاء بكم أعزائنا الكرام.</p>
        <a class="banner_btn" href="about.html">المزيد</a> </div>
    </div>
  </div>
  <div class="main">
  <div class="content_white">
    <h2>أهلا وسهلا بكم</h2>
    <p>تثتبثلاتثلاثبلاثلاثتالثتالا</p>
  </div>
  <div class="featured_content" id="feature">
    <div class="container">
      <div class="row text-center">
        <div class="col-mg-3 col-xs-3 feature_grid1"> <i class="fa fa-cog fa-3x"></i>
          <h3 class="m_1"><a href="services.html">خدمة 1</a></h3>
          <p class="m_2">بببببببببببب</p>
          <a href="services.html" class="feature_btn">المزيد</a> </div>
        <div class="col-mg-3 col-xs-3 feature_grid1"> <i class="fa fa-comments-o fa-3x"></i>
          <h3 class="m_1"><a href="services.html">خدمة 2</a></h3>
          <p class="m_2">ببببببببببببب</p>
          <a href="services.html" class="feature_btn">المزيد</a> </div>
        <div class="col-md-3 col-xs-3 feature_grid1"> <i class="fa fa-globe fa-3x"></i>
          <h3 class="m_1"><a href="services.html">خدمة 3</a></h3>
          <p class="m_2">بببببببببببببب</p>
          <a href="services.html" class="feature_btn">المزيد</a> </div>
        <div class="col-md-3 col-xs-3 feature_grid2"> <i class="fa fa-history fa-3x"></i>
          <h3 class="m_1"><a href="services.html">خدمة 4</a></h3>
          <p class="m_2">بببببببببببببب</p>
          <a href="services.html" class="feature_btn">المزيد</a> </div>
      </div>
    </div>
  </div>
  <div class="about-info">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="block-heading-two">
            <h2><span>عن شكرتنا</span></h2>
          </div>
          <p>نحن شركة رائدة فى مجال الأثاث فى فلسطين</p>
          <br>
          <p>مفروشات البيت الذهبى عنوان التميز والأناقة</p>
          <a class="banner_btn" href="about.html">المزيد</a> </div>
        <div class="col-md-4">
          <div class="block-heading-two">
            <h3><span>ما يميزنا</span></h3>
          </div>
          <div class="panel-group" id="accordion-alt3">
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3"> <i class="fa fa-angle-right"></i> الدقة فى المواعيد</a> </h4>
              </div>
              <div id="collapseOne-alt3" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>الدقة فى العمل</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3"> <i class="fa fa-angle-right"></i> بببببببببببب</a> </h4>
              </div>
              <div id="collapseTwo-alt3" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>ببببببببببببببب</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3"> <i class="fa fa-angle-right"></i> بببببببببببببببببب</a> </h4>
              </div>
              <div id="collapseThree-alt3" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>ببببببببببببببببببب</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3"> <i class="fa fa-angle-right"></i> بببببببببببببببببببب</a> </a> </h4>
              </div>
              <div id="collapseFour-alt3" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>ببببببببببببببببببببببببب</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="highlight-info">
    <div class="overlay spacer">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-3 col-xs-6"> <i class="fa fa-smile-o fa-5x"></i>
            <h4>ببببببببببببببببب</h4>
          </div>
          <div class="col-sm-3 col-xs-6"> <i class="fa fa-check-square-o fa-5x"></i>
            <h4>ببببببببببببببببب</h4>
          </div>
          <div class="col-sm-3 col-xs-6"> <i class="fa fa-trophy fa-5x"></i>
            <h4>ببببببببببببببببببب</h4>
          </div>
          <div class="col-sm-3 col-xs-6"> <i class="fa fa-map-marker fa-5x"></i>
            <h4>ببببببببببببببب</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="testimonial-area">
    <div class="testimonial-solid">
      <div class="container">
        <h2>ببببببببببببببببببببب</h2>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> <a href="#"></a> </li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""> <a href="#"></a> </li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""> <a href="#"></a> </li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""> <a href="#"></a> </li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <p>"ببببببببببببببببببببببببببب"</p>
              <p><strong>- بببببببببببب -</strong></p>
            </div>
            <div class="item">
              <p>"بببببببببببببببببببببب"</p>
              <p><strong>- بببببببببببببببب -</strong></p>
            </div>
            <div class="item">
              <p>"ببببببببببببببب"</p>
              <p><strong>- بببببببببببببببببب -</strong></p>
            </div>
            <div class="item">
              <p>"ببببببببببببببببببببببببب"</p>
              <p><strong>- ببببببببببببببببب -</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>



    {!! Html::script('website/js/responsive-nav.js') !!}
    {!! Html::script('website/js/bootstrap.min.js') !!}
    {!! Html::script('website/js/jquery.flexslider.js')  !!}

     @yield('footer')
     <div class="footer">
       <div class="footer_bottom">
         <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
         <div class="copy">
           <p>حقوق الملكية &copy; مصمم من طرف : وجدى موسى 2017<a href="#" rel="nofollow">  مفروشات البيت الذهبى  </a></p>
         </div>
       </div>
     </div>


</html>
