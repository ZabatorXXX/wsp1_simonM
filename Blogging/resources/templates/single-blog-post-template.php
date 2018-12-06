<?php
//Include Meta
require ('resources/includes/head.php');

//Include Header
require ('resources/views/header.php');

navigation($header);
?>


<div class="content">
  <h2><?php echo $titel; ?></h2>
  <p class="author"><?php echo $author; ?></p>
  <p class="date"><?php echo $date; ?></p>
  <p class="message"><?php echo $message; ?></p>
  </div>

<?php

require ('resources/views/footer.php');

?>
