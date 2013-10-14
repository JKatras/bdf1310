<?php  


$view = new viewModel();

$view->show('header.inc');
	
foreach ($data as $d) {
	echo "<h4>${d['charName']}</h4>";
	echo "";
	echo "<p>House Allegiance: ${d['house']}</p>";
	}

$view->show('footer.inc');
?>