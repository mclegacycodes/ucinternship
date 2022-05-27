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


// bootsrap function for preventing submitting empty forms
// Example starter JavaScript for disabling form submissions if there are invalid fields
// (function () {
//   'use strict'

//   // Fetch all the forms we want to apply custom Bootstrap validation styles to
//   var forms = document.querySelectorAll('.needs-validation')

//   // Loop over them and prevent submission
//   Array.prototype.slice.call(forms)
//     .forEach(function (form) {
//       form.addEventListener('submit', function (event) {
//         if (!form.checkValidity()) {
//           event.preventDefault()
//           event.stopPropagation()
//         }

//         form.classList.add('was-validated')
//       }, false)
//     })
// })()