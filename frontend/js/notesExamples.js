$(document).ready(function(){

  var notes = ['Finish note taking best app', 'Buy a milk', 'To do homework', 'Clean the house', 'Swedish lesson at 6.35pm'];
  $('#notes').text(notes[0]);
  var i = 1;
  if ( i < notes.length ) {
    setInterval(function(){

      if ( i == notes.length - 1 ) {
        i = 0;
        $('#notes').text(notes[0]);
      } else {
        i++;
        $('#notes').text(notes[i]);
      }

    }, 2000);
  }

});
