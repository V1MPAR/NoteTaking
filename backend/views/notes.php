<!DOCTYPE html>
<html lang="pl">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Source+Sans+Pro:400,700" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
                <a class="dropdown-item" href="<?= SITE_PATH; ?>notes/settings">Settings</a>
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
              <h1>Notes</h1>

              <div class="note-item">
                <div class="row">
                  <div class="col-9">
                    <p>2018-10-13</p>
                    <h1>Example note</h1>
                  </div>
                  <div class="col-3 center">
                    <i class="fas fa-times"></i>
                  </div>
                </div>
              </div>

              <div class="note-item">
                <div class="row">
                  <div class="col-9">
                    <p>2018-10-13</p>
                    <h1>Example note</h1>
                  </div>
                  <div class="col-3 center">
                    <i class="fas fa-times"></i>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-12 col-md-8 note">
              <div class="note-info">
                <h1>Example note<span>2018-10-13</span></h1>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

          </div>
        </div>
      </section>

      <footer class="main-footer">
        <p>Note Taking &copy; <?= date('Y'); ?></p>
      </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>