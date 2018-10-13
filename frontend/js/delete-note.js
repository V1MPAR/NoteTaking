$(document).ready(function(){

  $('.deleteNote').on('click', function(){

    var id = $(this).attr('noteid');

      $.ajax({
        type: "POST",
        url: "http://192.168.100.139/NoteTaking/ajax/deleteNote",
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
