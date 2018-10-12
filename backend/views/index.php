<!DOCTYPE html>
<html lang="pl">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Source+Sans+Pro:400,700" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= SITE_PATH; ?>frontend/css/main.css?<?= time(); ?>" />

    <title>Note Taking :: Simple Notebook</title>

  </head>
  <body>

    <div id="main-container">

      <header class="main-header">
        <div class="row" style="margin: 0;">
          <div class="col-md-3 d-none d-md-block notes">
            <p id="notes"></p>
          </div>
          <div class="col-12 col-md-6 logo">
            <a href="<?= SITE_PATH; ?>"><i class="far fa-sticky-note"></i></a>
          </div>
          <div class="col-md-3 d-none d-md-block login">
            <a href="<?= SITE_PATH; ?>"><i class="fas fa-sign-in-alt"></i></a>
          </div>
        </div>
      </header>

      <footer class="main-footer">
        <p>Note Taking &copy; <?= date('Y'); ?></p>
      </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="<?= SITE_PATH; ?>frontend/js/notesExamples.js?<?= time(); ?>"></script>

  </body>
</html>
