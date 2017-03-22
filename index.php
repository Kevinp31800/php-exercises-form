<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulaire2</title>
</head>
<body>
	<form action="user.php" method="post">
		<select name="civilit">
			<option value="Monsieur">Monsieur</option>
			<option value="Madame">Madame</option>
		</select>
		<label for='name'>Nom</label>
		<input type="text" name="name">
		<label for="firstName">Prénom</label>
		<input type="text" name="firstName">
		<input type="submit" value="envoyer">
	</form>
	<?php 
	echo $_POST["civilit"];
	echo $_POST["name"];
	echo $_POST["firstName"];
	?>
</body>
</html>