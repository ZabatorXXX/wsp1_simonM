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

<select id="user" name="poster">
	<?php foreach($users as $id=>$name){
		echo "<option value='{$id}'>{$name} </option>";
	} ?>
</select>
<textarea id=message name="message" placeholder="text" style="max-width: 800px; max-height: 300px; min-width: 300px; min-height: 100px;"></textarea>
<input type="submit" value="submit" name="comment">

</form>

<?php
	$message = '';
	$poster = '';

if(isset($_POST['comment'])) {
	$poster = (isset($_POST['poster'])) ? $_POST['poster'] : '';
	$message = (isset($_POST['message'])) ? $_POST['message'] : '';
	$sql = "INSERT INTO comments (Post_ID, User_ID, Text) VALUES ({$post}, {$poster}, '{$message}')";
}

//**************************//
// Så man inte kan lägga upp samma comentar om man refrechar sidan
	if ($pdo->query($sql)) {
		unset($sql);
	}
//*************************//





?>
