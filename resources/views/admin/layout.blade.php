<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('admin_assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/admin_assets/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/admin_assets/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/admin_assets/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('/admin_assets/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('/admin_assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('/admin_assets/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('/admin_assets/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('/admin_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('/admin_assets/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin._partials.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin._partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    
    <div class="content-wrapper">
        @yield('content')
    </div>
    @include('admin._partials.footer')

    
</div><!-- ./wrapper -->

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('/admin_assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{asset('/admin_assets/dist/js/custom.js')}}"></script>

    {{--<script src="{{asset('/admin_assets/plugins/morris/morris.min.js')}}"></script>--}}
    <!-- Sparkline -->
    <script src="{{asset('/admin_assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('/admin_assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('/admin_assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('/admin_assets/plugins/knob/jquery.knob.js')}}"></script>
    <!-- daterangepicker -->

    <script src="{{asset('/admin_assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{asset('/admin_assets/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('/admin_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('/admin_assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('/admin_assets/plugins/fastclick/fastclick.min.js')}}"></script>
    <script src="{{asset('/plugin/ckeditor/ckeditor.js')}}"></script>

    <!-- AdminLTE App -->
    <script src="{{asset('/admin_assets/dist/js/app.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('/admin_assets/dist/js/pages/dashboard.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('/admin_assets/dist/js/demo.js')}}"></script>

<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
</body>
</html>
