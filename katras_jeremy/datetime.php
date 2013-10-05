
<html lang="en">
	<head>
		<title>Hello World</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>My First PHP file</h1>
		<h2>Jeremy Katras</h2>
		<form action="datetime.php" method="post"> 
		<table border=”0”> 
			<tr>
				<td align="center">
				<input type="submit" value="What is the Date and Time?" />
				</td>
			</tr> 
		</table> 
		<?php 
			echo "<h2>It is ".date('H:i, jS F Y')."</h2>"; 
		?>
		</form>
	
	</body>
</html>