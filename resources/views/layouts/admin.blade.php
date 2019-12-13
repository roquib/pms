<!DOCTYPE html>
<html>

<head>

    <!-- Title -->
    <title>Patients Management System</title>

    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{asset('admin/assets/plugins/pace-master/themes/blue/pace-theme-flash.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/uniform/css/uniform.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/fontawesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('admin/assets/plugins/waves/waves.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/3d-bold-navigation/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/slidepushmenus/css/component.css')}}" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
    <link href="{{asset('admin/assets/css/modern.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/themes/white.css')}}" class="theme-color" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{asset('admin/assets/plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body class="page-header-fixed">
    <div class="overlay"></div>
    <div id="app">
        <main class="page-content content-wrap">
            @include('layouts.inc.navbar')

            @include('layouts.inc.sidebar')
            <div class="page-inner">
                @yield('content')
            </div>
            {{-- @include('layouts.inc.page-inner') --}}
        </main><!-- Page Content -->
    </div>
    <div class="cd-overlay"></div>

    {{-- <script src="{{asset('js/app.js')}}"></script> --}}
    <!-- Javascripts -->
    <script src="{{asset('admin/assets/plugins/jquery/jquery-2.1.3.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/pace-master/pace.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/switchery/switchery.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/uniform/jquery.uniform.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/offcanvasmenueffects/js/classie.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/offcanvasmenueffects/js/main.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/waves/waves.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/3d-bold-navigation/js/main.js')}}"></script>
    <script src="{{asset('admin/assets/js/modern.min.js')}}"></script>
    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
    @yield('js')
</body>

</html>