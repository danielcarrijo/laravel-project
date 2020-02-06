@extends('home')
@section('conteudo')
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-10 col-lg-8">
			<form method="post" action="{{route('cards.store')}}">
				@csrf
				@foreach($dados as $item)

				<div class="mt-3">
					<div class="form-row">
						<input type="text" class="form-control" id = "titulo{{$item->id}}" name="titulo{{$item->id}}" value="{{$item->titulo}}">
					</div>
					<div class="form-row mt-2">
						<textarea type="text" class="form-control" id = "subtitulo{{$item->id}}" name="subtitulo{{$item->id}}">{{$item->subtitulo}}</textarea>
					</div>
				</div>
				@endforeach
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		</div>
	</div>
</div>
@endsection