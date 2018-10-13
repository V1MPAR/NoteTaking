<?php

  class RegisterModel extends Model {

    function __construct() {

      parent::__construct();

    }

    public function checkEmailExists($email) {

      $getEmailsQuery = $this -> db -> prepare('SELECT * FROM users WHERE email = :email');
      $getEmailsQuery->bindValue(':email', $email, PDO::PARAM_STR);
      $getEmailsQuery->execute();

      if ( $getEmailsQuery->rowCount() == 0 ) {
        return true;
      } else {
        return false;
      }

    }

    public function registerNewUser($email, $password) {

      $hashPassword = password_hash($password, PASSWORD_DEFAULT);

      $insertNewUserQuery = $this -> db -> prepare('INSERT INTO users (id, email, password, loggedDate) VALUES(:id, :email, :password, :loggedDate)');
      $insertNewUserQuery->execute([
          'id' => NULL,
          'email' => $email,
          'password' => $hashPassword,
          'loggedDate' => date('Y-m-d H:i:s')
      ]);

      $firstNoteContent = '<p>Welcome <strong>' . $email . '</strong> in the <strong>Note Taking app!</strong></p><p>You are currently in your <strong>notebook.</strong></p><p><strong><br></strong></p><p>On the <strong>left</strong> are <strong>all your added notes</strong>. By clicking the <strong>plus icon</strong>, you can <strong>add</strong> your notes by first entering its title.</p><p>After creating a note, you <strong>can click</strong> on its <strong>title</strong> and the <strong>content will appear</strong> on the <strong>right side</strong>!</p><p>By <strong>clicking</strong> on the <strong>content</strong> of the note, <strong>you can edit it</strong>.</p><p>If the <strong>note is not useful</strong> anymore - <strong>remove it</strong> by <strong>clicking</strong> on the <strong>big red times icon</strong> next to the note <strong>on the left</strong>.</p><br><p><strong>Good luck</strong> and we wish you to save a large amount of useful and transparent notes! :)</p><p><em>Note Taking Team</em></p>';

      $insertNoteQuery = $this -> db -> prepare('INSERT INTO notes (id, title, content, date, email) VALUES(:id, :title, :content, :date, :email)');
      $insertNoteQuery->execute([
          'id' => NULL,
          'title' => 'Your first note',
          'content' => $firstNoteContent,
          'date' => date('Y-m-d'),
          'email' => $email
      ]);

      return true;

    }

  }
