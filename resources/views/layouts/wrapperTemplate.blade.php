 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Arca de Noé</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/publico/base.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/publico/rodape.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/publico/fotos.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/publico/principal.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/publico/cabecalho.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/publico/sobre.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/publico/contato.css') }}">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
	<header>
		<div class="nav">
			<a href="{{ route('principal') }}"><img src="{{ asset('img/publico/logo.png') }}" class="logo"></a>
			<ul class="nav-bar">
				<li class="opcao"><a href="{{ route('sobre_nos')}}">Sobre nós</a></li>
				<li class="opcao"><a href="{{ route('fotos') }}">Fotos</a></li>
				<li class="opcao"><a href="{{ route('contato') }}">Contato</a></li>
			</ul>
		</div>
	</header>

	<section>
		@yield('conteudo')
	</section>

	<footer>
		<div id="rodape">
			<div id="rodape-grid" class="nav-bar">
				<li id="icones-social">
					<ul><a href="google.com"><img src="{{ asset('img/publico/instagram.png') }}" class="img-social"></a></ul>
					<ul><a href="https://wa.me/556194186180"><img src="{{ asset('img/publico/whatsapp.png') }}" class="img-social"></a></ul>
					<ul><a href="google.com"><img src="{{ asset('img/publico/facebook.png') }}" class="img-social"></a></ul>
				</li>
			</div>
			<div id="informacoes-rodape">
				Suite 810 613 Friesen Mills,<br> Sauerchester, AR 68135-7288
			</div>
			<div id="logo">
				<img src="{{ asset('img/publico/logo.png') }}" class="logo">
			</div>

			<div id="divisao-rodape">
				<hr />
				<div id="creditos">Desenvolvido e mantido por taiguita - 2024/05</div>
			</div>
		</div>
	</footer>
</body>