<!DOCTYPE html>
<html  >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="{{asset('img/main_logo.png')}}">
<link rel="stylesheet" href="{{ asset('css/cwb_japanes_web/index.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
		function deleteConfirmation() {
				var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
				var mail = $('#subscriptmail').val();
				if(mail!==''){
					if(mail.match(
							/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
						))
						{
							$.ajax({
								type: 'POST',
								url: '{{ url("/subscription") }}',
								headers: {
									'X-CSRF-TOKEN': CSRF_TOKEN
								},
								data:{
									email:mail
								},
								success: function (response) {
									if (response.Message) {
										swal.fire(`${response.Message}`, response.message, "success");
										setTimeout(function(){
											location.reload();
										},2000);
									} 
									if(response.Error){
										swal.fire(`${response.Error}`, response.message, "error");
									}
								},
								error: function(xhr, textStatus, error){
									// console.log(xhr.responseText);
									// console.log(xhr.statusText);
									// console.log(textStatus);
									// console.log(error);
								}
							})
						}else{
							swal.fire(`<span style="color:red">Email incorrect!<span>`, "error");
						}
				}

		}
		
	</script>
</html>