<?php  
	echo '<h2>New Member Registration</h2>';
	echo '<p>Fields marked with (*) are required</p>';
	echo '<form method="POST" action="?action=addUser">
		<label for="username">Username*</label>
			<input type="text" name="username" id="username" maxlength="25" />
			<br />
		<label for="password">Password*</label>
			<input type="password" name="password" id="password" maxlength="25" />
			<br />
		<label for="email">Email*</label>
			<input type="email" name="email" id="email" maxlength="30"/>
			<br />
		<label for="firstname">First Name</label>
			<input type="text" name="firstname" id="firstname" maxlength="25" />
			<br />
		<label for="lastname">Last Name</label>
			<input type="text" name="lastname" id="lastname" maxlength="25" />
			<br />
		<label for="favchar">Favorite Character</label>
			<input type="text" name="favchar" id="favchar" maxlength="40" />
			<br />
			<input type="submit" value="Sign Me Up" />
		</form>';
?>