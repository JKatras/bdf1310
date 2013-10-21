<?php  

foreach ($data as $d => $row) {
	echo "<h3>Name: </h3>";
	echo "<h2>${row['charName']}</h2>";
	echo "<h3>House Allegiance: </h3>";
	echo "<h2>${row['house']}</h2>";

}

?>