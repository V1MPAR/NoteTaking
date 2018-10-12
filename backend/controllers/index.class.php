<?php

  class Index extends Controller {

    function __construct($params) {
      parent::__construct();

        require_once 'backend/models/index.class.php';
        $this -> model = new IndexModel();

        $this -> view -> controller = 'index';
        $this -> view -> model();
        $this -> view -> render();

    }

  }
