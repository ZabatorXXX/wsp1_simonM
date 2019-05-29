<?php

require './resources/includes/db.php';

$sql = "SELECT c.*, u.username AS Username FROM comments AS c JOIN users AS u ON u.ID = c.User_ID WHERE Post_ID = {$post} ORDER BY Creation_time DESC";

$comments = [];

if($pdo) {
  foreach ($pdo->query($sql) as $row) {
    $comments += array(
    $row['ID'] => array(
        'author' => $row['Username'],
        'date' => $row['Creation_time'],
        'text' => $row['Text']
      )
    );
  }
}

?>
