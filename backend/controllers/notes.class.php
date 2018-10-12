<?php

  class Notes extends Controller {

    function __construct($params) {
      parent::__construct();

        require_once 'backend/models/notes.class.php';
        $this -> model = new NotesModel();

        $this -> view -> controller = 'notes';
        $this -> view -> model();
        $this -> view -> render();

    }

  }
