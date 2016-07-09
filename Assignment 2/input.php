<!doctype html>
<html lang="en">
	<head>       
       	<title>Input</title>   
	</head>
	<body>
<a href=input.php>Input</a>
<a href=display.php>Display</a>
     		<form method="POST">
 		 	First name: <input type="text" name="fname"><br>
  		 	Last name: <input type="text" name="lname"><br>
  		 	Age: <input type="text" name ="age"><br>
  			<input type="submit" value="Submit">
		</form> 
		<?php 
			if (isset($_POST['fname']) && isset ($_POST['lname']) && isset ($_POST['age']))
			{
				mysql_connect('localhost', 'root', 'bob22');

				mysql_select_db('Assignment2');

				$fname =  mysql_real_escape_string($_POST['fname']);
				$lname = mysql_real_escape_string($_POST['lname']);
				$age = (int)mysql_real_escape_string($_POST['age']);

				mysql_query("INSERT INTO Details (fname, lname, age) VALUES ('$fname', '$lname', '$age')") or die(mysql_error());

				mysql_close();
			}
		?>
	</body>
</html>