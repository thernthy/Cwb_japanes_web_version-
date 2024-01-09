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
<link rel="stylesheet" href="{{ asset('css/cwb_japanes_web/index.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<title>CWBカンボジア</title>
{!! SEO::generate() !!}
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
<script type="text/javascript">
	var menueIcon = document.querySelector('.navTrigger')
	var menuContainer = document.querySelector('.menu_containter')
	menueIcon.addEventListener('click', function(e){
		if(menueIcon.classList.contains('active')){
			menueIcon.classList.remove('active')
			if(menuContainer.classList.contains('active')){
				menuContainer.classList.replace('active', 'ContainerUnactive')
			}
		}else{
			menueIcon.classList.add('active')
			menuContainer.classList.replace('ContainerUnactive', 'active')
		}
	})
	
</script>
</html>