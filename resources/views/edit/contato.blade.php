@extends('home')
@section('conteudo')
<div  class="container my-4">
		<div class="row">
			<div class="col-12">
        @if (session('message'))
          <div class="alert alert-sucess">
            {{ session('message') }}
          </div>
        @endif

				<input type="text" class="form-control mb-1" id="busca" onkeyup="myFunction()" placeholder="Busca pelos depoimentos">
			</div>
		</div>
    <div id="scroll" style="overflow-y: scroll; height: 400px;">
			<ul id='list' class="col-12" style = "list-style: none;" id="users" >
				@for($i = count($depoimentos)-1; $i >=0; $i--)
				<div id="div{{$depoimentos[$i]->name}}" class="row border p-3">
					<div class="col-lg-10 col-md-9 col-sm-9 col-xs-2">
						<li id="{{$depoimentos[$i]->name}}"><a href="#" class="text-dark">{{$depoimentos[$i]->name}} {{$depoimentos[$i]->last_name}}</a> de {{$depoimentos[$i]->city}}-{{$depoimentos[$i]->state}} disse:<br> {{$depoimentos[$i]->message}}</li>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-3 col-xs-10">
						<a id="{{$depoimentos[$i]->id}}" href="#" onclick = "modal({{$depoimentos[$i]->id}})"data-url = "{{route('contato.destroy', ['id' => $depoimentos[$i]->id])}}" data-toggle="modal" data-target="#sure"><i class="fas fa-user-minus mr-2"></i></a>
					</div>
				</div>
				@endfor
			</ul>
     </div>
		</div>


<div class="modal fade" id="sure" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      	<h4 class="modal-title ml-3">Tem certeza que quer excluir este usuário?</h4>
      	<div class="modal-body">
      		<center id="modal-centro">
      			<button style="border: none; background: none;"><a id = "modal-link" class="text-dark" href=""><i class="fas fa-check-square display-4"></i></a></button>
      			<button type="button" style="border: none; background: none;" data-dismiss="modal"><i class="fas fa-times display-4"></i></button>
      		</center>
      	</div>
      </div>
    </div>
</div>
@endsection

@section('script')
<script>
var route = "";
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("busca");
    filter = input.value.toUpperCase();
    ul = document.getElementById("list");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            var str = "div"+li[i].id;
            var div = document.getElementById(str)
            div.style.display = "";
        } else {
            var str = "div"+li[i].id;
            var div = document.getElementById(str);
            div.style.display = "none";
        }
    }
}


function modal(id) {
        console.log(id);
        var element = document.getElementById(id);
        var route = element.getAttribute('data-url');
        console.log(route);
        var link = document.getElementById("modal-link");
        link.href = route;
    }



/*function oo() {
    $('[data-toggle="popover"]').popover();
  }*/
</script>
@endsection