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


require ('resources/views/footer.php');

?>
