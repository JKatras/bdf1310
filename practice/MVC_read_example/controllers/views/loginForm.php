<?php
	echo '<h2>Member Login</h2>';
	echo '<h3>Please enter your Username and Password</h3>';
	echo '<form method="POST" action="?action=authenticate">
		<label for="username">Username</label>
			<input type="text" name="username" id="username" maxlength="25" />
			<br />
		<label for="pass">Password</label>
			<input type="password" name="password" id="password" maxlength="25" />
			<br />
		<input type="submit" value="Login"/>
		</form>
		<br />';
	echo '<h4>Not yet a member?</h4>';
	echo '<a href=?action=create>Register Here</a>';
?>