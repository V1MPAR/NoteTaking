$(document).ready(function(){

  $('.note-item').on('click', function(){

    var id = $(this).attr('noteid');
    var title = $(this).attr('notetitle');
    var date = $(this).attr('notedate');
    var content = $(this).attr('notecontent');
    $('#editNote').attr('noteid', id);
    $('.note-content').show();
    $('.note-click-info').hide();
    $('#note-title').text(title);
    $('#note-date').text(date);
    $('#note-content').text(content);
    $('#note-content-edit').val(content);
    if ( content == false ) {
      $('#note-content').text('Click here to edit the note');
    }

  });

});
