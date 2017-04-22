<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <title>
  موقع بيع الأثاث
  |

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
    <div class="container"> <a  class="navbar-brand" href="{{ url('/') }}) }}"><i class="fa fa-paper-plane"></i>البيت الذهبى</a>
      <div class="menu pull-right"> <a class="toggleMenu" href="#"><img src="/website/images/nav_icon.png" alt="" /> </a>
        <ul class="nav" id="nav">
          <li class="current"><a href="{{ url('/home') }}">الرئيسية</a></li>
          <li><a href="about.html">من نحن</a></li>
          <li><a href="services.html">خدماتنا</a></li>
          <li><a href="contact.html">تواصل معنا</a></li>

          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a href="{{ route('login') }}"> تسجيل دخول</a></li>
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
