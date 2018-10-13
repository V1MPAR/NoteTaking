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

      if ( $this -> params[1] == 'addNote' ) {

        $title = htmlentities($_POST['title'], ENT_QUOTES, "UTF-8");

        $insertNoteQuery = $this -> model -> db -> prepare('INSERT INTO notes (id, title, content, date, email) VALUES(:id, :title, :content, :date, :email)');
        $insertNoteQuery->execute([
            'id' => NULL,
            'title' => $title,
            'content' => '',
            'date' => date('Y-m-d'),
            'email' => $_SESSION['userEmail']
        ]);

      }

      if ( $this -> params[1] == 'editNote' ) {

        $content = htmlentities($_POST['content'], ENT_QUOTES, "UTF-8");
        $id = htmlentities($_POST['id'], ENT_QUOTES, "UTF-8");

        $editNoteQuery = $this -> model -> db -> prepare('UPDATE notes SET content = :content WHERE id = :id');
        $editNoteQuery->bindValue(':content', $content, PDO::PARAM_STR);
        $editNoteQuery->bindValue(':id', $id, PDO::PARAM_STR);
        $editNoteQuery->execute();

      }

      if ( $this -> params[1] == 'deleteNote' ) {

        $id = htmlentities($_POST['id'], ENT_QUOTES, "UTF-8");

        $deleteNoteQuery = $this -> model -> db -> prepare('DELETE FROM notes WHERE id = :id');
        $deleteNoteQuery->bindValue(':id', $id, PDO::PARAM_STR);
        $deleteNoteQuery->execute();

      }

    }

  }
