
<?php
// Include Meta
require ('resources/includes/head.php');

// Include Header
require ('resources/views/header.php');

navigation($header);



// Content - New way for Blogging
//<<<CONTENT gör en lång echo
echo <<< CONTENT
<div class="content">
<h2>Kort information</h2>
$error
$content
</div>
CONTENT;
// Inlcude Footer
require ('resources/views/footer.php');
?>
