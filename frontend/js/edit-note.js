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

  $('#note-title').on('click', function(){

    var content = $('#note-title').text();
    $('#note-title').hide();
    $('#note-title-edit-form').show();
    $('#note-title-edit').val(content);

  });

  $('#cancelEditTitle').on('click', function(){
    $('#note-title').show();
    $('#note-title-edit-form').hide();
  });

  $('#cancelEditNote').on('click', function(){
    $('#note-content').show();
    $('#note-content-edit-form').hide();
  });

  $('#editTitle').on('click', function(){
    var id = $('#editTitle').attr('noteid');
    var content = $('#note-title-edit').val();
    $.ajax({
      type: "POST",
      url: SITE_PATH + "ajax/editTitle",
      dataType : 'json',
      data: {
          ajax : 'editTitle',
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

  $('#editNote').on('click', function(){
    var id = $('#editNote').attr('noteid');
    var content = $('#note-content-edit').val();
    $.ajax({
      type: "POST",
      url: SITE_PATH + "ajax/editNote",
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
