<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
<meta name="author" content="Creative Tim">
<title>{{env('APP_NAME')}} | @yield('title')</title>
<link rel="icon" href="{{asset('backend/img/brand/favicon.png')}}" type="image/png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
<link rel="stylesheet" href="{{asset('backend/vendor/nucleo/css/nucleo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('backend/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('backend/css/argon.css?v=1.1.0')}}" type="text/css">
</head>
<body class="bg-default">
<div class="main-content">
	<div class="header bg-gradient-primary">
		@yield('content')
		<div class="separator separator-bottom separator-skew zindex-100">
			<svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
				xmlns="http://www.w3.org/2000/svg">
				<polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
			</svg>
		</div>
	</div>
	{{-- <div class="container pb-5">
		<div class="row justify-content-center">
			<div class="col-lg-5 col-md-7"></div>
		</div>
	</div> --}}
</div>
<script src="{{asset('backend/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/vendor/js-cookie/js.cookie.js')}}"></script>
<script src="{{asset('backend/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('backend/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<script src="{{asset('backend/js/argon.js?v=1.1.0')}}"></script>
<script src="{{asset('backend/js/demo.min.js')}}"></script>
</body>
</html>