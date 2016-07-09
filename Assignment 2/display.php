<!doctype html>
<html lang="en">
	<head>       
       	 <title>Display</title>   
    	</head>
	<body>
		<a href=input.php>Input</a>
		<a href=display.php>Display</a>
		<table>
			<tr>
  				<th>First name</th>
  				<th>Last name</th> 
				<th>Age</th>
			</tr>  
			<?php 
				mysql_connect('localhost', 'root', 'bob22');

				mysql_select_db('Assignment2');

				$results = mysql_query('SELECT * FROM Details');

				while ($row = mysql_fetch_array($results))
					echo "<tr><td>{$row['fname']}</td><td>{$row['lname']}</td><td>{$row['age']}</td></tr>";

				mysql_close();
			?>
		</table>
	</body>
</html>