<!-- 
	Teodulfo Espero
	BS Cloud and Systems Administration
	Western Governors University 
-->


<!-- HTML part of our code -->
<! DOCTYPE html>
<html lang="en">
<html>
	<head>	
			<meta charset="utf-8">
			<title>Forms | PHP Programming</title>
			<meta name="description" content="">
  			<meta name="author" content="teoespero">
	</head>
	<body>

		<!-- 
			This is the form that accepts the;
				username
				password 
		-->
		<form action="forms_process.php" method="post">
				<input type="text" placeholder="Username" name="username">
				<input type="password" placeholder="Password" name="key"><br>
				<input type="submit" name="submit">
		</form>
		<?php
			
		?>
	</body>
</html>