<?php 
echo "<ul>"; 
foreach ($data as $d => $row) {
	echo "<li><h4>Name: </h4><h5>${row['firstname']} ${row['lastname']}</h5></li>";
}
echo "</ul>";
?>