<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>迪赞科技后台管理系统</title>
  <link href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/animate/animate.css')}}" rel="stylesheet">
  @yield('css')
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
</head>
<body class="">
  <div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="page-wrapper" class="gray-bg">
      <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
              <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
          </div>
          <ul class="nav navbar-top-links navbar-right">
              <li>
                  <span class="m-r-sm text-muted welcome-message">Hi,{{getUser()->name}}.</span>
              </li>
              <li>
                  <a href="{{ url('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out"></i> 退出
                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                  </a>
              </li>
          </ul>
        </nav>
      </div>
      @yield('content')
      <div class="footer">

          <div>
              <strong>Copyright</strong> 迪赞科技后台管理系统 &copy; http://www.designuuuu.com
          </div>
      </div>

    </div>
  </div>
  <script src="{{asset('vendors/jquery/jquery-2.1.1.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendors/metisMenu/jquery.metisMenu.js')}}"></script>
  <script src="{{asset('vendors/slimscroll/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('admin/js/inspinia.js')}}"></script>
  <script src="{{asset('/js/app.js')}}"></script>
  @yield('js')
</body>
</html>
