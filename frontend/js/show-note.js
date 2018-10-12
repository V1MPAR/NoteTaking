$(document).ready(function(){

  $('.note-item').on('click', function(){

    var title = $(this).attr('notetitle');
    var date = $(this).attr('notedate');
    var content = $(this).attr('notecontent');
    $('.note-click-info').hide();
    $('.note-content').show();
    $('#note-title').text(title);
    $('#note-date').text(date);
    $('#note-content').text(content);

  });

});
