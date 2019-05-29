<?php
// Include Meta
require ('resources/includes/head.php');

// Include Header
require ('resources/views/header.php');



navigation($header);


// Content - New way for Blogging
echo '<div class="content">';
echo '<h2>Skapa blogginlägg</h2>';
echo $error;
  require ('resources/includes/addbloggpost.php');
echo '</div>';

//Inlcude Footer
require ('resources/views/footer.php');
?>
