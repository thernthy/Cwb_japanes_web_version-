<!DOCTYPE html>
<html  >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<?php
session_start();
$csrfToken = bin2hex(random_bytes(32)); // Generate a random CSRF token
$_SESSION['csrf_token'] = $csrfToken; // Store the token in the session
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="<?php echo $csrfToken; ?>">
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
	function deleteConfirmation() {
			var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var mail = $('#subscriptmail').val()
			$.ajax({
				type: 'POST',
				url: '{{ url("/subscription") }}',
				data:{
					CSRF_TOKEN: CSRF_TOKEN,
					email:mail
				},
				success: function (results) {
                    if (results.success === true) {
                        swal.fire("Done!", results.message, "success");
                        // refresh page after 2 seconds
                        setTimeout(function(){
                            location.reload();
                        },2000);
                    } else {
                        swal.fire("Error!", results.message, "error");
                    }
                },
				error: function(xhr, error){

				}
			})

	}
</script>
</html>