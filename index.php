<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulaire2</title>
</head>
<body>
	<?php 
	if (!$_POST["civilit"]||!$_POST["name"]||!$_POST["firstName"]) {
		echo '<form action="index.php" method="post">
		<select name="civilit">
			<option value="Monsieur">Monsieur</option>
			<option value="Madame">Madame</option>
		</select>
		<label for="name">Nom</label>
		<input type="text" name="name">
		<label for="firstName">Prénom</label>
		<input type="text" name="firstName">
		<input type="submit" value="envoyer"></form>';
	}
	else{	
		echo $_POST["civilit"];
		echo $_POST["name"];
		echo $_POST["firstName"];
	}
	?>
</body>
</html>