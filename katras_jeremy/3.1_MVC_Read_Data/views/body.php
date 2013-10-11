<?php
echo "<center>";
foreach ($data as $d) {
	echo $d["firstname"];
	echo "";
	echo $d["last"];
	echo " <a href=?action=details&id=".$d["id"}.">details</a>";
	echo "<br>";
}
echo "</center>";
?>