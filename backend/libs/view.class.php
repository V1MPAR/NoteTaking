<?php

  class View {

    function __construct() {
      $this -> request = $_GET['url'];
      $this -> request = rtrim($this -> request, '/');
      $this -> params = explode("/", $this -> request);
    }

    public function model() {
      require_once 'backend/models/' . $this -> controller . '.class.php';
    }

    public function render() {
      require_once 'backend/views/' . $this -> controller . '.php';
    }

  }
