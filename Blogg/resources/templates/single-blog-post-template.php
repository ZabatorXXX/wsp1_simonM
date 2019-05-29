<?php
//Include Meta
require ('resources/includes/head.php');

//Include Header
require ('resources/views/header.php');

navigation($header);

// <<<CONTENT gör en lång echo
echo <<<CONTENT
<div class="content">
  <h2>{$titel}</h2>
  <p class="author">{$author}</p>
  <p class="date">{$date}</p>
  <p class="message">{$message}</p>
</div>
CONTENT;

echo '<div class="addcomments">';
  require 'resources/includes/addcomments.php';
echo '</div>';

echo <<<COMMENTS
  <div class="content">
    <h2>Kommentarer</h2>
COMMENTS;
require './resources/includes/getComments.php';
foreach ($comments as $key => $value) {
  echo <<<COMMENT
  <div class="post">
    <h3>{$value['author']}</h3>
    <p class="date">Datum: {$value['date']}</p>
    <p class="message">{$value['text']}</p>
  </div>
COMMENT;
}

echo <<<COMMENTS
</div>
COMMENTS;

require 'resources/views/footer.php';

?>
