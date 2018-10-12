<?php

  class Login extends Controller {

    function __construct($params) {
      parent::__construct();

        require_once 'backend/models/login.class.php';
        $this -> model = new LoginModel();
        $this -> view -> controller = 'login';

        $this -> params = $params;

        if ( isset($params[0]) ) {
          if ( isset($params[1]) ) {
            $action = $params[1];
            $this -> $action();
          } else {
          }
        }

        if ( isset ($_SESSION['userLogged']) ) {
          header('Location: ' . SITE_PATH . 'notes');
        } else {
          $this -> view -> model();
          $this -> view -> render();
        }

      }

      private function loginAction() {

        if ( isset ($_POST['login']) ) {

          $email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
          $password = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");

          if ( $email != null ) {

            if ( $password != null ) {

              if ( $this -> model -> checkEmailExists($email) == true ) {

                if ( $this -> model -> checkPasswordValidate($email, $password) == true ) {

                  $_SESSION['userLogged'] = true;
                  $_SESSION['userEmail'] = $email;

                  header('Location: ' . SITE_PATH . 'notes');

                } else {
                  header('Location: ' . SITE_PATH . 'login');
                }

              } else {
                header('Location: ' . SITE_PATH . 'login');
              }

            } else {
              header('Location: ' . SITE_PATH . 'login');
            }

          } else {
            header('Location: ' . SITE_PATH . 'login');
          }

        }

      }

  }
