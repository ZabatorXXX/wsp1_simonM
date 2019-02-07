<?php
// Include Meta
require ('resources/includes/head.php');

// Include Header
require ('resources/views/header.php');

navigation($header);


// Content - New way for Blogging
echo '<div class="content">';
echo '<h2>Alla blogginlägg</h2>';
echo $error;
foreach($model as $key => $value){


// <<<POST gör en lång echo
echo <<<POST
  <div class='post'>
    <h3>{$value['title']} </h3>
    <p class="author">Författare:{$value['author']}</p>
    <p class="date">Datum:{$value['date']}</p>
    <p class="message">Här kommer själva inlägget men inte i sin helhet...</p>
    <a href="index.php?page=blogg&post={$key}">Läs mer</a></p>
  </div>
POST;
}

echo '</div>';

//Inlcude Footer
require ('resources/views/footer.php');
?>
