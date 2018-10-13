<!DOCTYPE html>
<html lang="pl">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Source+Sans+Pro:400,700" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= SITE_PATH; ?>frontend/css/main.css?<?= time(); ?>" />

    <title>Note Taking :: Log in to your Notebook</title>

  </head>
  <body>

    <div id="main-container">

      <header class="main-header">
        <div class="row" style="margin: 0;">
          <div class="col-12 col-md-12 logo">
            <a href="<?= SITE_PATH; ?>"><i class="far fa-sticky-note"></i></a>
          </div>
        </div>
      </header>

      <section class="login-form">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 offset-md-4">
              <h1>Log in</h1>
              <form method="post" action="<?= SITE_PATH; ?>login/loginAction">
                <div class="col-12 col-md-12 mb-3 input-group">
                  <div class="col-12 padding-0">
                    <?php if ( isset ( $_SESSION['emailError'] ) ) { ?>
                      <p><?= $_SESSION['emailError']; ?></p>
                    <?php } ?>
                  </div>
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" name="email">
                </div>
                <div class="col-12 col-md-12 mb-3 input-group">
                  <div class="col-12 padding-0">
                    <?php if ( isset ( $_SESSION['passwordError'] ) ) { ?>
                      <p><?= $_SESSION['passwordError']; ?></p>
                    <?php } ?>
                  </div>
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password">
                </div>
                <div class="col-12 col-md-12 mb-3 input-group">
                  <button class="btn btn-red" type="submit" name="login">Log in</button>
                </div>
                <div class="col-12 center">
                  <a href="<?= SITE_PATH; ?>register">You don't have account yet?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <footer class="main-footer">
        <p>Note Taking - Created by Mateusz Domurad &copy; <?= date('Y'); ?></p>
      </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="<?= SITE_PATH; ?>frontend/js/notesExamples.js?<?= time(); ?>"></script>

  </body>
</html>
