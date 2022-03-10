(function($){

$(document).ready(function(){

 
    // Create alert function
    function setalert(msg, type='danger'){

        return `<p class="alert alert-${type} d-flex justify-content-between">${msg}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>`;
    }

$(document).on('submit', '#role_add_form' ,function(e){

e.preventDefault();
let name = $('#role_add_form input[name = "name"]').val();

if(name ==''){

$('.msg').html(setalert('Name filed must not be empty'));
}else{

$.ajax({

url:'role',
method:'POST',
data: new FormData(this),
contentType: false,
processData: false,
success: function(data){

  console.log(data); 
}


});



}



});


});



})(jQuery)

