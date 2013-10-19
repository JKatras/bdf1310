<?php 
foreach ($data as $d) {
	echo "<h3>Welcome back, ${d['username']}</h3>";
	echo "<ul>";
	echo "<li><p>Name: ${d['firstname']} ${d['lastname']}</p></h4</li>";
	echo "<p>Email: ${d['email']}</p>";
	echo "<p>Favorite Character: ${d['favChar']}</p>";
	echo "</ul>";
	echo "<ul id='options'>";
	echo "<li><a href=?action=update&id=${d['userId']}>Update Profile</a></li>";
	echo "<li><a href=?action=delete&id=${d['userId']}>Delete Profile</a></li>";
	echo "<li><a href=?action=logout>Log Out</a></li>";
	echo "</ul>";
}
?>