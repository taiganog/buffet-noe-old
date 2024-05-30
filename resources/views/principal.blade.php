@extends('layouts.wrapperTemplate')

@section('conteudo')
<div style="display: flex;">
	<img src="{{ asset('img/publico/main-img.jpg') }}" name="main-img" id="fundo-img" width="100%">
	<div id="container-entrada">
		<div id="container-entrada-conteudo">
			<h2 class="titulo"><b>Arca de Noé - Logo</b></h2><br>
			<h1 class="subtitulo">Serviço de Buffet</h1><br>
			<p class="conteudo">Descubra o sabor da celebração com nosso buffet excepcionalmente elaborado, onde cada detalhe é uma experiência sensorial única.</p>
		</div>
	</div>
</div>
@endsection