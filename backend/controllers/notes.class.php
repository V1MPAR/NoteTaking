<?php

  class Notes extends Controller {

    function __construct($params) {
      parent::__construct();

        require_once 'backend/models/notes.class.php';
        $this -> model = new NotesModel();

        $this -> view -> controller = 'notes';

        $this -> params = $params;

        if ( isset($params[0]) ) {
          if ( isset($params[1]) ) {
            $action = $params[1];
            $this -> $action();
          } else {
          }
        }

        if ( isset ($_SESSION['userLogged']) ) {
          $this -> view -> model();
          $this -> view -> render();
        } else {
          header('Location: ' . SITE_PATH . 'login');
        }

    }

    private function logout() {
      unset($_SESSION['userLogged']);
      unset($_SESSION['userEmail']);
      header('Location: ' . SITE_PATH);
    }

  }
