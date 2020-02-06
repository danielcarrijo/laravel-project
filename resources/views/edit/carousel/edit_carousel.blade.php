@extends('home')
@section('conteudo')
<div class="container">
	<div class="row">
		<div class="col-12">
			
			<form  method="post" action="{{route('carousel.update', ['id' => $carousel->id])}}" enctype="multipart/form-data">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Título</label>
						<input type="text" class="form-control" id="titulo" value = "{{$carousel->titulo}}" name="titulo" required>
					</div>
					<div class="form-group col-md-12">
						<label>Subtítulo</label>
						<input type="text" class="form-control" id="subtitulo" name="subtitulo" value = "{{$carousel->subtitulo}}" required>
					</div>
					<div class="form-group col-md-12">
						<label>Arquivo de Imagem</label><br>
						<input type="file" id="imagem" name="imagem">
					</div>
				</div>
				<button class="btn btn-primary" type="submit">Enviar</button>
			</form>
		</div>
	</div>
</div>
@endsection