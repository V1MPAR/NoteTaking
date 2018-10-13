$(document).ready(function(){

  $('.deleteNote').on('click', function(){

    var id = $(this).attr('noteid');

      $.ajax({
        type: "POST",
        url: SITE_PATH + "ajax/deleteNote",
        dataType : 'json',
        data: {
            ajax : 'deleteNote',
            id : id
        },
        success: function() {
        },
        complete: function() {
          location.reload();
        },
        error: function() {
        }
      });

  });

});
