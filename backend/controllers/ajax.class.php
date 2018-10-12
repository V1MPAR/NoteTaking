<?php

  class Ajax extends Controller {

    function __construct($params) {
      parent::__construct();

      require_once 'backend/models/ajax.class.php';
      $this -> model = new AjaxModel();

      $this -> params = $params;

      if ( isset($params[0]) ) {
        if ( isset($params[1]) ) {
          $this -> ajax = strtolower($params[1]);
          $action = $params[0];
          $this -> $action($this -> ajax);
        } else {
          echo 'Type JS file';
        }
      }

    }

    private function ajax($ajax) {

      if ( $this -> params[1] == 'test' ) {
        echo 'ajaxTest';
      }

    }

  }
