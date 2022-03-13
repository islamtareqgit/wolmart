(function($){

$(document).ready(function(){

 
    // Create alert function
    function setalert(msg, type='danger'){

        return `<p class="alert alert-${type} d-flex justify-content-between">${msg}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>`;
    }

    
    // Gell all roles
    getallRoles();
    
    function getallRoles(){

    $.ajax({

    url:  "all-roles",
    method: "GET",
    success: function(data){

     $('#role-list').html(data);

    }

    });

    }
// Role Add system


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

  getallRoles();
  $('#role_add_form')[0].reset();
}


});



}



});

// Delete all roles

$(document).on('click', '.delete-btn', function(e){
e.preventDefault();
let id = $(this).attr('delete_id');


swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Data!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({

      url: "del-role/" + id,
      success: function(){
      getallRoles();
      swal('Role data deleted');
      
      }
      
      
      });


  } else {
    swal("Your Data is safe!");
  }
});



});

});



})(jQuery)

