$(document).ready(function(){

  $('#addNote').on('click', function(){

    var title = $('#noteTitleInput');

    if (title.val().length > 0) {
      $.ajax({
        type: "POST",
        url: "http://192.168.100.139/NoteTaking/ajax/addNote",
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
