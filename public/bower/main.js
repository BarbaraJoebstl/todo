$(document).ready(function(){

  $('#sortable').sortable().bind('sortupdate', function(e, ui) {

    var id = $('#sortable li').map(function(){
      return $(this).data("id");
    }).get();

    $.ajax({
      type: "POST",
      url: "changeTaskOrder",
      dataType: "json",
      data: {id: id},
      success: function(order){
        console.log(order)
      }
    });
  });

});
