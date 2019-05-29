<?php
require 'resources/includes/db.php';
//Test our Connection
if ($pdo) {

//Define my Sql-get_class_vars
  $sql = "SELECT p.*, u.Username FROM posts As p JOIN users As u ON p.User_ID = u.ID ORDER BY Creation_time DESC";

//comment

//Define $Model-array
  $model = array();

//Fill our pre-drfined $model-array
    foreach ($pdo->query($sql) as $row){
    $model += array(
    $row['ID'] => array(
        'slug' => $row['Slug'],
        'title' => $row['Headline'],
        'author' => $row['Username'],
        'date' => $row['Creation_time'],
        'Text' => $row['Text']
      )
    );
  }



}
else {
  print_r($pdo->errorInfo());
}

?>
