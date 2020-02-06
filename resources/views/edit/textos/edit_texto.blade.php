@extends('home')
@section('conteudo')
<div class="container">
	<div class="row">
		<div class="col-12">
			<form  method="post" action="{{route('textos.update', ['id' => $texto->id])}}">
				@csrf
				<label> Texto </label>
				<textarea name="texto" class="form-control">{{$texto->texto}}</textarea>
				<button type="submit"> Salvar </button>
			</form>
		</div>
	</div>
</div>
@endsection