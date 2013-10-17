<h2>Characters by Region</h2>
<p>Select a region to view which characters originated there.</p>

<?php
foreach ($rows as $num => $row) {
		echo "<li><h3><a href=?action=details&id=${row['regionId']}>${row['name']}</a></h3></li>";
}

?>