<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>@yield('title')</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		<link rel="shortcut icon" href="{{asset('/favicon.ico')}}">
		
		<link rel="stylesheet" type="text/css" href="/css/app.css">
	</head>
	<body>
	
		 @include('partials.navigation')
		 
		<div class="container">
			
			@yield('content')
			
		</div>
	
		 @include('partials.footer')
		 
		<script type="text/javascript" src="/js/app.js"></script>
	</body>
</html>