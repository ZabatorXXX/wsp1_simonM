<?php
require 'db.php';

$sql = "SELECT ID, Username FROM Users ORDER BY Username ASC";

$users = array();

foreach ($pdo->query($sql) as $row) {
	array_push($users, $users[$row['ID']] = $row['Username']);
}


?>
<form class="" action="" method="post">
<input type="hidden" value="INSERT INTO" name="type">
RUBRIK: <br>
<input type="text" name="headline" value=""><br>
Användare: <br>
<select id="user" name="bloggposter">
	<?php foreach($users as $id=>$name){
		echo "<option value='{$id}'>{$name} </option>";
	} ?>
</select><br>
Meddelande: <br>
<textarea id=message name="message" placeholder="text" style="max-width: 800px; max-height: 300px; min-width: 300px; min-height: 100px;"></textarea><br>
<input type="submit" value="submit" name="bloggpost">

</form>
<?php
	$poster= '';
	$slug = '';
	$headline= '';
	$message = '';
	$errorPost = '';

if(isset($_POST['bloggpost'])) {
	if (!empty($_POST['headline'])) {
		$headline = $_POST['headline'];
		require 'slugify.php';
		$slug = slugify($headline);
	} else {
		$errorPost .= ' No headline is written!';
		// Medelande som kommer upp om man inte skriver något i rutan på Posta
	}
	if (!empty($_POST['bloggposter'])) {
		$poster = $_POST['bloggposter'];
	} else {
		$errorPost .= ' No user selected!';
	}
	if (!empty($_POST['message'])) {
		$message = $_POST['message'];
	} else {
		$errorPost .= ' No message was written!';
		// Medelande som kommer upp om man inte skriver något i rutan på Posta
	}

	if (empty($errorPost)) {
		$sql = "INSERT INTO posts (User_ID, Slug, Headline, Text) VALUES ({$poster}, '{$slug}', '{$headline}', '{$message}')";

//************************//
//Kod så blogginläget inte upprepar sig efter refrech av sidan
		if ($pdo->query($sql)) {
			unset($sql);
//***********************//
		}
	} else {
		echo "<strong>{$errorPost}</strong>";
		unset($errorPost);
	}

}
