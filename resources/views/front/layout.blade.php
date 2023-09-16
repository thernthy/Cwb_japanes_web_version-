<!DOCTYPE html>
<html  >

<!-- Mirrored from mobirise.com/extensions/petsm4/school/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 03:44:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<!-- Site made with Mobirise Website Builder v4.11.2, https://mobirise.com -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="{{asset('img/main_logo.png')}}">
{!! SEO::generate() !!}

<!-- <link rel="stylesheet" href="https://mobirise.com/extensions/petsm4/assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
<link rel="stylesheet" href="https://mobirise.com/extensions/petsm4/assets/web/assets/mobirise-icons2/mobirise2.css">
<link rel="stylesheet" href="https://mobirise.com/extensions/petsm4/assets/web/assets/mobirise-icons/mobirise-icons.css">

<link rel="stylesheet" href="https://mobirise.com/extensions/petsm4/assets/theme/css/style.css">
<link rel="stylesheet" href="https://mobirise.com/extensions/petsm4/assets/formoid-css/recaptcha.css">
<link rel="stylesheet" href="{{ asset('css/themes/tether.min.css') }}">
-->
<link rel="stylesheet" href="{{ asset('css/themes/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/themes/bootstrap-grid.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/themes/bootstrap-reboot.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/themes/progress.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/themes/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/themes/jquery.formstyler.css') }}">
<link rel="stylesheet" href="{{ asset('css/themes/jquery.formstyler.theme.css') }}">
<link rel="stylesheet" href="{{ asset('css/themes/jquery.datetimepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/themes/styles.css') }}">
<link rel="preload" as="style" href="{{ asset('css/themes/mbr-additional.css') }}">
<link rel="stylesheet" href="{{ asset('css/themes/mbr-additional.css') }}" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Battambang&display=swap" rel="stylesheet">
</head>

<link rel="stylesheet" href="{{ asset('vendor/font-awesome-4.5.0/css/font-awesome.min.css') }}">

<!-- custom css -->
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
 <style>
    body{
			font-family: 'Battambang', cursive !important;
	}

 </style>
@stack('styles')
</head>
<body>

<!-- navbar -->
@include('front.navbar')

<!-- content -->
@yield('content')

@include('front.footer')
<!-- Placed at the end of the document so the pages load faster -->
@include('front.scripts')
</body>
</html>