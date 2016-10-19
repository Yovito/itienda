$(document).ready(function(){

  // Update item cart
  $('.btn-update-item').on('click', function(event){
    event.preventDefault();
    var id = $(this).data('id');
    var href = $(this).data('href');
    var quantity = $('#product_'+id).val();
    window.location.href = href + '/' + quantity;
  });
});
