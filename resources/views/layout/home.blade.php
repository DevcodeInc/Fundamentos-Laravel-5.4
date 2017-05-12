<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>devit: the front page of the internet</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,300" rel="stylesheet" type="text/css">
		@yield('css')
	</head>

	<body>
		
		<header class="header" >
			<div class="header__left">
				<a class="header__left__logo"href="">devit.com</a>
				@include('layout.nav')
			</div>
			@if(Auth::check())
			<div class="header__right">
				<span class="header__right__login">
					<a href="{{ route('logout') }}">Cerrar sesión</a>
				</span>
			</div>
			@endif
		</header>

		<aside class="aside">
			<div class="aside__login">
				@include('user.login')
			</div>
			@if(Auth::check())
			<div class="aside__post">
				<div class="aside__post__newpost">
					<a href="{{ route('register-post')  }}">Enviar un nuevo post de texto</a>
				</div>
			</div>
			@endif
		</aside>

		<main class="main" >
			@yield('content')
		</main>
	</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
	<script>
		$( ".header__left__tabmenu__item" ).click(function() {
			$( ".header__left__tabmenu__item" ).attr('class', 'header__left__tabmenu__item');
			$( this ).addClass("selected");
		});
	</script>
	@yield('js')
</html>
