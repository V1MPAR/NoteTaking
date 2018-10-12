<?php

  class Login extends Controller {

    function __construct($params) {
      parent::__construct();

        require_once 'backend/models/login.class.php';
        $this -> model = new LoginModel();

        $this -> view -> controller = 'login';
        $this -> view -> model();
        $this -> view -> render();

    }

  }
