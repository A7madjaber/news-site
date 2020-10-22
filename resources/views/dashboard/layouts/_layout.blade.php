@extends('admin.layouts.css')
@extends('admin.layouts.scripts')
@extends('admin.layouts.rtl')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../gallary/favicon.png" type="image/png">

  <title>Bracket Responsive Bootstrap3 Admin</title>

<!--   @yield('css') -->
   <!-- <link href="{{asset('admin/css/style.default.css')}}" rel="stylesheet">
   <link href="{{asset('admin/css/style.default-rtl.css')}}" rel="stylesheet"> -->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="../js/html5shiv.js"></script>
  <script src="../js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
 @yield('rtl')
  
  <div class="mainpanel">
    @include('Admin.layouts.header')
  <div class="contentpanel">
    
      @yield('content')
      
    </div><!-- contentpanel -->
  </div>
  
  

  
  
</section>


@yield('scripts')

</body>
</html>
