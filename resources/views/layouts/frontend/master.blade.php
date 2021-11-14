<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('title') | {{config('app.name')}}</title>
      <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
      <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/line-awesome.min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/flaticon.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/swiper-min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/odometre.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
   </head>
   <body>
      <div class="preloader js-preloader">
         <img src="{{asset('assets/img/preloader.gif')}}" alt="Image">
      </div>
      <div class="page-wrapper ">
        @include('layouts.frontend.components.header')

        @yield('content')
        @include('layouts.frontend.components.footer')
      </div>
      <a href="javascript:void(0)" class="back-to-top bounce"><i class="las la-arrow-up"></i></a>
      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/bootstrap-validator.js"></script>
      <script src="assets/js/form-validation.js"></script>
      <script src="assets/js/swiper-min.js"></script>
      <script src="assets/js/jquery-magnific-popup.js"></script>
      <script src="assets/js/jquery-appear.js"></script>
      <script src="assets/js/mixitup.min.js"></script>
      <script src="assets/js/odometer.min.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>
