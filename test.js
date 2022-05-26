$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
      items:1,
    loop:true,
    margin:10,
    autoplay:true,
    lazyLoad:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true
  });
});

// bootstrap modal focus
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})