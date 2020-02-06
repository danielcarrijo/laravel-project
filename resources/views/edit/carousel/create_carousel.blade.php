@extends('home')
@section('conteudo')
<div class="container">
	<div class="row">
		<div class="col-12">
			<form  method="post" action="{{route('carousel.store')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Título</label>
						<input type="text" class="form-control" id="titulo" name="titulo" required>
					</div>
					<div class="form-group col-md-12">
						<label>Subtítulo</label>
						<input type="text" class="form-control" id="subtitulo" name="subtitulo" required>
					</div>
					<div class="form-group col-md-12">
						<label>Arquivo de Imagem</label><br>
						<input type="file" id="imagem" name="imagem" required>
					</div>
				</div>
				<button class="btn btn-primary" type="submit">Enviar</button>
			</form>
		</div>
	</div>
</div>
@endsection