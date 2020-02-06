<!DOCTYPE html>
<html>
<head>
	<title>Regular Expression</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
</head>
<body>
<br><br><br><br><br>
	<center><h3>
	<?php
		if(isset($_POST['create'])){

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$password = $_POST['password'];
			$repassword = $_POST['repassword'];

			if(empty($firstname)){
				echo "Fill up your information ";
			}
			elseif(!preg_match("/^[a-zA-Z\s]+$/", $firstname)){
				echo "Please Enter Name As Only String. ";
			}

			elseif(empty($lastname)){
				echo "Please Enter Your Last Name. ";
			}
			elseif(!preg_match("/^[a-zA-Z\s]+$/", $lastname)){
				echo "Please Enter Last Name As Only String. ";
			}


			elseif(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{6,20}$/m", $password)){
				echo "Enter 1 Upppercase, 1 Lowercase, 1 Number, 1 Special Character. ";
			}

			elseif ($password != $repassword){
				echo "Password doesn't match. ";
			}

			elseif($password == $password && $repassword == $repassword && $firstname == $firstname && $lastname == $lastname){
				echo "Successfully Registered! ";
			}
		
		}

//Aa1!aa
	?>
	</center>
<h3>
		<div class="container">
			<div class="login-box">
			

			<h1>Registration</h1>
			<form action="regexp.php" method="post">
				
			<input type="text" name="firstname" class="form-control" placeholder="First Name.." required><br>
			
			<input type="text" name="lastname" class="form-control" placeholder="Last Name.." required> <br>
			
			<input type="email" name="email" class="form-control" placeholder="Email Address.." required><br>
			
			<input type="password" name="password" class="form-control" placeholder="Password.." required><br>
			
			<input type="password" name="repassword" class="form-control" placeholder="Re-Enter Password.." required><br><br><br>
			<center>
			<input type="submit" class="btn btn-primary" name="create" value="Sign Up"></center>
</form></div></div>
		
</body>
</html>