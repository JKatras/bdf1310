<?php  
echo "<center>";
foreach ($data as $d) {
	echo " <b>Username:</b>";
	echo $d["username"];
	echo "<b>Password:</b>";
	echo $d["password"];
	echo "<br>";
}
echo "</center>";

?>