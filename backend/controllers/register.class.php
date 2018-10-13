<?php

  class Register extends Controller {

    function __construct($params) {
      parent::__construct();

        require_once 'backend/models/register.class.php';
        $this -> model = new RegisterModel();
        $this -> view -> controller = 'register';

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

      private function registerAction() {

        if ( isset ($_POST['register']) ) {

          unset($_SESSION['emailError']);
          unset($_SESSION['passwordError']);

          $email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
          $password = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");
          $rePassword = htmlentities($_POST['rePassword'], ENT_QUOTES, "UTF-8");

          if ( $email != null ) {

            if ( filter_var($email, FILTER_VALIDATE_EMAIL) ) {

              if ( $password != null ) {

                if ( strlen($password) >= 8 ) {

                  if ( $password == $rePassword ) {

                    if ( $this -> model -> checkEmailExists($email) == true ) {

                      if ( $this -> model -> registerNewUser($email, $password) == true ) {

                        $_SESSION['userLogged'] = true;
                        $_SESSION['userEmail'] = $email;
                        header('Location: ' . SITE_PATH . 'notes');

                      }

                    } else {
                      $_SESSION['emailError'] = 'The user with the given e-mail address already exists';
                      header('Location: ' . SITE_PATH . 'register');
                    }

                  } else {
                    $_SESSION['passwordError'] = 'Passwords don\'t match';
                    header('Location: ' . SITE_PATH . 'register');
                  }

                } else {
                  $_SESSION['passwordError'] = 'The password must have a minimum of 8 characters';
                  header('Location: ' . SITE_PATH . 'register');
                }

              } else {
                $_SESSION['passwordError'] = 'The password field is empty';
                header('Location: ' . SITE_PATH . 'register');
              }

            } else {
              $_SESSION['emailError'] = 'The email provided isn\'t valid';
              header('Location: ' . SITE_PATH . 'register');
            }

          } else {
            $_SESSION['emailError'] = 'The email field is empty';
            header('Location: ' . SITE_PATH . 'register');
          }

        }

      }

  }
