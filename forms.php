<!-- 
	Teodulfo Espero
	BS Cloud and Systems Administration
	Western Governors University 
-->

<?php
	// define the range for username and passwords
	$minimum = 5; 
	$maximum = 10;

	// define our valid users
	$validusers = array("edwin", "teoespero");
	$validPW = array("12345678", "123456789");

	// validation

	// if the Submit button is clicked
	if(isset($_POST['submit']))
	{
		echo "Button is clicked.", "<br>";

		// we first check if a username is supplied
		if(isset($_POST['username']))
		{
			$username = $_POST['username'];

			// validate for the username length
			// it should fall between a valid range
			if(strlen($username) < $minimum or strlen($username) > $maximum){
				echo "Username has to be ", $minimum," - ", $maximum, " characters.";
			}
			else{

				// if its within the range
				// check if the username is on the list

				if (in_array($username, $validusers)) {

					$pwIndex = array_search($username, $validusers);

					// check if a password is supplied
					if(isset($_POST['key'])){
						$password = $_POST['key'];

						// check if the password is at least at minimum length
						if(strlen($password) < $minimum){
							echo "Password minimum of 8 characters";
						}

						// show the password
						else{
							if($password == $validPW[$pwIndex]){
								echo "Password ", $password;
							}
							else{
								echo "Password ", $password, " is invalid.";	
							}
						}
					}
					else
					{
						//say it was not provided
						echo "A password was not provided.";
					}			
				}
				else{

					// invalid user
					echo "Username ", $username,"is not found.<br>";
				}
			}
		}
		else{

			// no username was entered
			echo "A username was not provided.";
		}
	}
?>

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

		<form action="forms.php" method="post">
				<input type="text" placeholder="Username" name="username">
				<input type="password" placeholder="Password" name="key"><br>
				<input type="submit" name="submit">
		</form>
		<?php
			
		?>
	</body>
</html>