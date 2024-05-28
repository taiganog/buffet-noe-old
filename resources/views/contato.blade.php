@extends('layouts.wrapperTemplate')

@section('conteudo')
	<div>
		<div id="background-contato" style="display: flex;">
			<img src="{{ asset('img/publico/contato_background.jpg') }}" id="imagem-background-contato">
		</div>

		<div id="wrapper-formulario">
			<div id="conteudo-formulario">
				<p class="subtitulo" style="margin-bottom: 4rem;">Solicite um orçamento, entraremos em contato!</p>
				<form action="{{ route('contato') }}" method="post" class="formulario">
					@csrf
					<div class="grid-formulario">
						<input type="text" name="nome" placeholder="Nos informe seu nome" class="conteudo-grid-formulario" required>
						<input type="email" name="email" placeholder="Nos informe seu email" class="conteudo-grid-formulario" required>
						<input type="tel" name="telefone" placeholder="Nos informe seu telefone" class="conteudo-grid-formulario" required>
						<select name="categoria-festa" class="conteudo-grid-formulario" required>
							<option value="" disabled selected>Selecione o tipo de evento</option>
							<option value="festa">Festa Infantil</option>
							<option value="formatura">Formatura</option>
							<option value="casamento">Casamento</option>
							<option value="15-anos">15 Anos</option>
							<option value="confraternizacao">Confraternização</option>
						</select>
					</div>
					<textarea name="orcamento" placeholder="Conte-nos sobre sua ideia!" class="conteudo-grid-formulario" id="texto-formulario" rows="4" cols="50" required></textarea>

					<input type="submit" value="Enviar" class="enviar-formulario"></button>
				</form>
			</div>
		</div>
	</div>
@endsection