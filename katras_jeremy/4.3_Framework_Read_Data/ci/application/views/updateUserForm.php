<?php
foreach ($data as $d) {

$userId = "${d['userId']}";
$firstname = "${d['firstname']}";
$lastname = "${d['lastname']}";
$email = "${d['email']}";
$favChar = "${d['favChar']}";

echo '<h2>Update Your Information</h2>';
echo '<form method="POST" action="?action=updateUser&userId=';
		echo $userId;
		echo '">';
echo '<label for="firstname">First Name </label>
		<input type="text" name="firstname" id="firstname" value="';
		echo $firstname; 
		echo '" maxlength="25" /><br />';
echo '<label for="lastname">Last Name </label>
		<input type="text" name="lastname" id="lastname" value="';
		echo $lastname;
		echo '" maxlength="25" /><br />';
echo '<label for="email">Email </label>
		<input type="email" name="email" id="email" value="';
		echo $email;
		echo '" maxlength="30"/><br />';
echo '<label for="favChar">Favorite Character </label>
		<input type="text" name="favChar" id="favChar" value="';
		echo $favChar;
		echo '" maxlength="40" /><br />';
echo '<input type="submit" value="Update" />';
echo '</form>';
}
?>