<?php

  $notes = new NotesModel();
  $notes -> getNotes($_SESSION['userEmail']);

?>

<!DOCTYPE html>
<html lang="pl">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Source+Sans+Pro:400,700" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= SITE_PATH; ?>node_modules/trumbowyg/dist/ui/trumbowyg.min.css?<?= time(); ?>" />

    <link rel="stylesheet" href="<?= SITE_PATH; ?>frontend/css/main.css?<?= time(); ?>" />

    <title>Note Taking :: Your Notebook</title>

  </head>
  <body>

    <div id="main-container">

      <header class="main-header">
        <div class="row" style="margin: 0;">
          <div class="col-md-3 d-none d-md-block search">
            <div class="input-group">
              <input type="text" class="form-control input-outline-red" placeholder="Search notes">
              <div class="input-group-append">
                <button class="btn btn-outline-red" type="button"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 logo">
            <a href="<?= SITE_PATH; ?>"><i class="far fa-sticky-note"></i></a>
          </div>
          <div class="col-md-3 d-none d-md-block user">
            <div class="dropdown">
              <a class="dropdown-toggle" href="#" id="userDropdownLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $_SESSION['userEmail']; ?>
              </a>
              <div class="dropdown-menu user-dropdown" aria-labelledby="userDropdownLink">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="<?= SITE_PATH; ?>notes/logout">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </header>

      <section class="notes-section">
        <div class="container-fluid">
          <div class="row">

            <div class="col-12 col-md-4 notes">
              <div class="row">
                <div class="col-9 notes-heading">
                  <h1>Notes</h1>
                </div>
                <div class="col-3 notes-heading">
                  <div class="dropdown">
                    <a class="dropdown-toggle chevron-none" href="#" role="button" id="dropdownAddNote" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-plus"></i>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownAddNote">
                      <div class="input-group">
                        <input type="text" class="form-control outline-red" id="noteTitleInput" placeholder="Title for note" aria-label="Title for note" aria-describedby="addNote">
                        <div class="input-group-append">
                          <button class="btn btn-outline-red" type="button" id="addNote">Add Note</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="notes-list" id="scrollbarNotes">

                <?php for ( $i = 0; $i < $notes -> notesCount; $i++ ) { ?>

                <div class="note-item" noteid="<?= $notes -> noteId[$i]; ?>" notetitle="<?= $notes -> noteTitle[$i]; ?>" notedate="<?= $notes -> noteDate[$i]; ?>" notecontent="<?= $notes -> noteContent[$i]; ?>">
                  <div class="row">
                    <div class="col-9">
                      <p><?= $notes -> noteDate[$i]; ?></p>
                      <h1><?= $notes -> noteTitle[$i]; ?></h1>
                    </div>
                    <div class="col-3 center">
                      <i class="fas fa-times deleteNote" noteid="<?= $notes -> noteId[$i]; ?>"></i>
                    </div>
                  </div>
                </div>

                <?php } ?>

              </div>

            </div>

            <div class="col-12 col-md-8 note">

              <div class="note-click-info">
                <h1>Select a note from the left to preview it</h1>
                <h3>You don't have any notes yet? Create it.</h3>
              </div>

              <div class="note-content">
                <div class="note-info">
                  <h1 id="note-title"></h1>
                  <span id="note-date"></span>
                </div>
                <p id="note-content"></p>
                <div class="form-group" id="note-content-edit-form">
                  <textarea class="form-control outline-red" rows="5" id="note-content-edit"></textarea>
                  <button class="btn btn-default" type="button" id="cancelEditNote">Cancel</button>
                  <button class="btn btn-red-without-100-w" type="button" id="editNote" noteid="">Edit Note</button>
                </div>
              </div>

            </div>

          </div>
        </div>
      </section>

      <footer class="main-footer">
        <p>Note Taking - Created by Mateusz Domurad &copy; <?= date('Y'); ?></p>
      </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="<?= SITE_PATH; ?>node_modules/trumbowyg/dist/trumbowyg.min.js?<?= time(); ?>"></script>

    <script src="<?= SITE_PATH; ?>frontend/js/show-note.js?<?= time(); ?>"></script>
    <script src="<?= SITE_PATH; ?>frontend/js/add-note.js?<?= time(); ?>"></script>
    <script src="<?= SITE_PATH; ?>frontend/js/delete-note.js?<?= time(); ?>"></script>
    <script src="<?= SITE_PATH; ?>frontend/js/edit-note.js?<?= time(); ?>"></script>

  </body>
</html>
