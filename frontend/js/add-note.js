$(document).ready(function(){

  $('#addNote').on('click', function(){

    var title = $('#noteTitleInput');

    if (title.val().length > 0) {
      $.ajax({
        type: "POST",
          url: SITE_PATH + "ajax/addNote",
        dataType : 'json',
        data: {
            ajax : 'addNote',
            title : title.val()
        },
        success: function() {
        },
        complete: function() {
          location.reload();
        },
        error: function() {
        }
      });
    }

  });

});
