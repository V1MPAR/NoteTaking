$(document).ready(function(){

  $('#note-content-edit').trumbowyg({
    semantic: false,
    btns: [
      ['formatting'],
      ['strong', 'em', 'underline', 'del'],
      ['superscript', 'subscript'],
      ['link'],
      ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
      ['unorderedList', 'orderedList'],
      ['removeformat'],
      ['fullscreen']
    ]
  });

  $('.editor-modern-ui').trumbowyg({
    prefix: 'modern-ui'
  });

  $('#note-content').on('click', function(){

    var content = $('#note-content').html();
    $('#note-content').hide();
    $('#note-content-edit-form').show();
    $('#note-content-edit').trumbowyg('html', content);

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
