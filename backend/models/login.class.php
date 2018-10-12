<?php

  class LoginModel extends Model {

    function __construct() {

      parent::__construct();

    }

    public function checkEmailExists($email) {

      $getEmailsQuery = $this -> db -> prepare('SELECT * FROM users WHERE email = :email');
      $getEmailsQuery->bindValue(':email', $email, PDO::PARAM_STR);
      $getEmailsQuery->execute();

      if ( $getEmailsQuery->rowCount() == 1 ) {
        return true;
      } else {
        return false;
      }

    }

    public function checkPasswordValidate($email, $password) {

      $getPasswordQuery = $this -> db -> prepare('SELECT * FROM users WHERE email = :email');
      $getPasswordQuery->bindValue(':email', $email, PDO::PARAM_STR);
      $getPasswordQuery->execute();

      if ( $getPasswordQuery->rowCount() > 0 ) {
        $passwordDb = $getPasswordQuery->fetch();
        if ( password_verify($password, $passwordDb['password']) ) {
          return true;
        } else {
          return false;
        }
      }

    }

  }
