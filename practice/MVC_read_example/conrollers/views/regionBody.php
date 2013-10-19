<?php

foreach ($data as $d => $row) {
	echo "<li><h3><a href=?action=details&regionId=${row['regionId']}>${row['name']}</a></h3></li>";
	
}

?>