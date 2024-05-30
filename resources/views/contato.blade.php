@extends('layouts.wrapperTemplate')

@section('conteudo')
	<div>
		<div id="background-contato" style="display: flex;">
			<img src="{{ asset('img/publico/contato_background.jpg') }}" id="imagem-background-contato">
		</div>

		<div id="wrapper-formulario">
			<div class="conteudo-formulario">
				<p class="subtitulo" style="margin-bottom: 4rem;">Solicite um orçamento ou deixe um elogio, entraremos em contato!</p>
					@if($errors->any())
						<div id="erros">
							@foreach($errors->all() as $erro)
								{{ $erro }}<br />
							@endforeach
						</div>
					@endif
				<form action="{{ route('contato') }}" method="post" class="formulario">
					@csrf
					<div class="grid-formulario">
						<input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nos informe seu nome" class="conteudo-grid-formulario">
						<input type="email" name="email" value="{{ old('email') }}" placeholder="Nos informe seu email" class="conteudo-grid-formulario">
						<input type="tel" name="telefone" value="{{ old('telefone') }}" placeholder="Nos informe seu telefone" class="conteudo-grid-formulario">
						<select name="tipo" class="conteudo-grid-formulario">
							{{-- Default --}}
							<option value="" disabled selected>Selecione o tipo de evento</option>
							{{-- Default loop para opções de confraternizações --}}
							@foreach($tipos_festa as $key => $tipo_festa)
								<option value="{{ $key }}" {{ old('tipo') == $key ? 'selected' : '' }}> {{ $tipo_festa }}</option>
							@endforeach
						</select>
					</div>

					<textarea name="mensagem" placeholder="Conte-nos sobre sua ideia!" class="conteudo-grid-formulario" id="texto-formulario" rows="4" cols="50">{{ (old('mensagem')) != '' ? old('mensagem') : '' }}</textarea>

					<input type="submit" value="Enviar" class="botao-envio">
					{{--<button type="button" name="whatsapp" id="botao-whatsapp" class="botao"><a href="https://wa.me/556194186180" style="padding: inherit;">Ou nos chame via WhatsApp!</a></button>--}}
				</form>
			</div>
		</div>
	</div>
@endsection