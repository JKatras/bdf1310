<?php  
echo '<h1>Users</h1>';
foreach ($userId as $u) {
	
		echo "<h3>${u['firstname']} ${u['lastname']}:</h3>
		  <p>${u['dob']}</p>";

}
?>