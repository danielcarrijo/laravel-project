
$('#link-Slide').carousel({
  interval: 2000
})

$('.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
    }
})

window.onscroll = function() {
  var slide = document.getElementById("link-Slide");
  var element = document.getElementById("menu1");
  
  if (slide.getBoundingClientRect().top <= -5) {
    element.classList.remove("my-nav");
    element.classList.add("teste");
    var itens = document.getElementsByClassName("nav-link");
    for (const item of itens) {
    	item.classList.add("text-dark");
    }
  }
  else {
    element.classList.add("my-nav");
    element.classList.remove("teste");
    var itens = document.getElementsByClassName("nav-link");
    for (const item of itens) {
    	item.classList.remove("text-dark");
    }
  }
 
 

}






