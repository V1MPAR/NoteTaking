<?php

  class NotesModel extends Model {

    function __construct() {

      parent::__construct();

    }

    public function getNotes($email) {

      $getNotesQuery = $this -> db -> prepare('SELECT * FROM Notes WHERE email = :email ORDER BY date DESC');
      $getNotesQuery->bindValue(':email', $email, PDO::PARAM_STR);
      $getNotesQuery->execute();

      $this -> notesCount = $getNotesQuery->rowCount();
      $this -> noteTitle = [];
      $this -> noteDate = [];
      $this -> noteContent = [];

      if ( $getNotesQuery->rowCount() > 0 ) {
        while ( $note = $getNotesQuery->fetch() ) {
          array_push($this -> noteTitle, $note['title']);
          array_push($this -> noteDate, $note['date']);
          array_push($this -> noteContent, $note['content']);
        }
      }

    }

  }
