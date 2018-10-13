$(document).ready(function(){

  $('.note-item').on('click', function(){

    var id = $(this).attr('noteid');
    var title = $(this).attr('notetitle');
    var date = $(this).attr('notedate');
    var content = $(this).attr('notecontent');
    $('#editTitle').attr('noteid', id);
    $('#editNote').attr('noteid', id);
    $('.note-content').show();
    $('.note-click-info').hide();
    $('#note-title').text(title);
    $('#note-date').text(date);
    $('#note-content').html(content);
    $('#note-content-edit').val(content);
    if ( content == false ) {
      $('#note-content').text('Click here to edit the note');
    }

      $('html, body').animate({
        scrollTop: $('.note-content').offset().top
      }, 500);

  });

});
