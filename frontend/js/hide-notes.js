$(document).ready(function(){

  $('#hideNotes').on('click', function(){
      $('.notes-list').hide();
      $('#showNotes').show();
      $('#hideNotes').hide();
  });

  $('#showNotes').on('click', function(){
      $('.notes-list').show();
      $('#showNotes').hide();
      $('#hideNotes').show();
  });

});
