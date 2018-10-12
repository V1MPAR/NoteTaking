<?php

  class Model {

    function __construct() {

        $config = [
          'host' => DB_HOST,
          'user' => DB_USER,
          'pass' => DB_PASS,
          'db' => DB_NAME
        ];

      try {

        $this -> db = new PDO("mysql:host={$config['host']};dbname={$config['db']};charset=utf8", $config['user'], $config['pass'], [
          PDO::ATTR_EMULATE_PREPARES => false,
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

      } catch (PDOException $error) {
        exit('Database Error');
      }

      $this -> request = $_GET['url'];
      $this -> request = rtrim($this -> request, '/');
      $this -> params = explode("/", $this -> request);

    }

  }
