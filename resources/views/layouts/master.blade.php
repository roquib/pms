<!DOCTYPE HTML>

<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <title>Demo</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{asset('patient/style.css')}}" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>


<body>
    {{-- header --}}
    @include('patients.header')
    <div id="app">
        @yield('content')
    </div>

    <!--footer-->
    @php
    $main = route('appointment');
    $compare = route('/').'/appointment';
    // echo $main.' || '.$compare;
    @endphp

    @if (Auth::check())
    @if ($main == $compare)
    @else
    @include('patients.footer')
    @endif
    @endif
    @yield('js')
    <div class="page-footer">
        <p class="no-s text-center">2015 &copy; Hospital Name</p>
    </div>
</body>

</html>