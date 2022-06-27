<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Shayna Template" />
    <meta name="keywords" content="Shayna, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Shayna | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('frontend2/css/bootstrap.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend2/css/font-awesome.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend2/css/themify-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend2/css/elegant-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend2/css/owl.carousel.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend2/css/nice-select.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend2/css/jquery-ui.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend2/css/slicknav.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend2/css/style.css')}}" type="text/css" />
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    @include('frontend.layouts.header')
    <!-- Header End -->

    @yield('content')



    <!-- Footer Section Begin -->
   @include('frontend.layouts.Footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('frontend2/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frontend2/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend2/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('frontend2/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('frontend2/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend2/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('frontend2/js/jquery.dd.min.js')}}"></script>
    <script src="{{asset('frontend2/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('frontend2/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend2/js/main.js')}}"></script>
</body>

</html>