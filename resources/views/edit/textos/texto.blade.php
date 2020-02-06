@extends('home')
@section('conteudo')
<div  class="container my-4">
		<div class="row">
			<div class="col-12">
			        @if (session('message'))
			          <div class="alert alert-danger">
			            {{ session('message') }}
			          </div>
			        @endif
			</div>
		</div>
			<ul id='list' class="col-12" style = "list-style: none;" id="textos" >
				@foreach($textos as $texto)
				<div id="div{{$texto->texto}}" class="row border p-3">
					<div class="col-lg-10 col-md-9 col-sm-9 col-xs-2">
						<li id="{{$texto->texto}}"><a href="#" class="text-dark">{{$texto->texto}}</a></li>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-3 col-xs-10">
						<a href="{{route('textos.edit', ['id' => $texto->id])}}"><i class="fas fa-user-edit mr-2"></i></a>
					</div>
				</div>
				@endforeach
			</ul>
		</div>
	</div>
	
</div>
@endsection
