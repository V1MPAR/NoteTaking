$(document).ready(function(){

  $('#note-content').on('click', function(){

    var content = $('#note-content').text();
    $('#note-content').hide();
    $('#note-content-edit-form').show();
    $('#note-content-edit').show().val(content);

  });

  $('#cancelEditNote').on('click', function(){
    $('#note-content').show();
    $('#note-content-edit-form').hide();
  });

  $('#editNote').on('click', function(){
    var id = $('#editNote').attr('noteid');
    var content = $('#note-content-edit').val();
    $.ajax({
      type: "POST",
      url: "http://192.168.100.139/NoteTaking/ajax/editNote",
      dataType : 'json',
      data: {
          ajax : 'editNote',
          content : content,
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
