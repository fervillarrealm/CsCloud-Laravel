<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "" }} - CsCloud</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon"/>
    <!-- Bootstrap 3.3.2 -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!--<link href="{{ asset("/css/skin-fusioninvoice.min.css")}}" rel="stylesheet" type="text/css" />-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    @stack('styles')
</head>
<body class="skin-blue sidebar-mini" style="height: auto;" cz-shortcut-listen="true">
<div class="wrapper">
    <div id="loader" class="loader" style="display: none">
        <img src="{{ asset('assets/img/preloader01.gif') }}" alt="Cargando..." />
    </div>
    <!-- Header -->
    @include('includes.header')

    <!-- Sidebar -->
    @include('includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
             @if(count($errors) > 0)
              <div id="alertSpam" class="alert alert-danger alert-dismissible" role="alert">
                @foreach($errors->all() as $errors)
                  <strong>Error! </strong><span>{{ $errors }}</span>
                @endforeach
              </div>
            @endif
            
            @if(Session::has('fail'))
              <div id="alertSpam" class="alert alert-danger alert-dismissible" role="alert">
                  <strong>Error! </strong><span>{{ Session::get('fail') }}</span>
              </div>
            @endif
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('includes.footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<script src="{{ asset ("assets/js/main.js") }}" type="text/javascript"></script>
<!-- Site JS -->
<script src="{{ asset ("assets/js/CsCloud.js") }}" type="text/javascript"></script>
<!--<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:8081/browser-sync/browser-sync-client.js?v=2.18.8'><\/script>".replace("HOST", location.hostname));//]]>
</script>-->
@stack('scripts')
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>