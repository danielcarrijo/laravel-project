@extends('home')
@section('conteudo')

<a class="btn btn-primary my-2" href="{{route('carousel.create')}}">Adicionar um Slide</a>
<div class="container-fluid my-2">
	@if (session('message'))
          <div class="alert alert-danger">
            {{ session('message') }}
          </div>
        @endif

	<ul id='list' class="col-12" style = "list-style: none;" id="users" >
		
		@foreach($carousels as $carousel)
			<li >
					<ul class="row border p-4" style="list-style: none;">
						<li class="col-5"><img class="img-fluid" src="{{asset ('img/Originals/'.$carousel->nome_imagem)}}"></li>
						<li class="col-5">
							<h5 class="my-1">{{$carousel->titulo}}</h5><br><br><br>
							<h6 class="my-2">{{$carousel->subtitulo}}</h6>
						</li>
						<li class="col-2">
							<a href="{{route('carousel.edit',['id' => $carousel->id])}}"><i class="fas fa-edit"></i></a>
							<a href="" data-target="#sure" id="{{$carousel->id}}" data-toggle="modal" onclick="modal({{$carousel->id}})" data-url="{{route('carousel.destroy', ['id' => $carousel->id])}}"><i class="fas fa-minus-circle"></i></a>
						</li>
					</ul>

			</li>
		@endforeach
		
	</ul>
</div>

<div class="modal fade" id="sure" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      	<h4 class="modal-title ml-3">Tem certeza que quer excluir este slide?</h4>
      	<div class="modal-body">
      		<center id="modal-centro">
      			<button style="border: none; background: none;"><a id = "modal-link" class="text-dark" href=""><i class="fas fa-check-square display-4"></i></a></button>
      			<button type="button" style="border: none; background: none;" data-dismiss="modal"><i class="fas fa-times display-4"></i></button>
      		</center>
      	</div>
      </div>
    </div>
</div>
<script>
function modal(id) {
        console.log(id);
        var element = document.getElementById(id);
        var route = element.getAttribute('data-url');
        console.log(route);
        var link = document.getElementById("modal-link");
        link.href = route;
    }

</script>
@endsection