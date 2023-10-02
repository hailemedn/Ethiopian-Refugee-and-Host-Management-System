<?php 
include('index_header.php'); 
include('dbcon.php');
?>
<body>
<?php

	$confirm_password = $_POST['cpassword'];
	$username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];



	if (empty($username) || empty($password) || 
	empty($confirm_password) || empty($firstname) || empty($lastname) || empty($gender))
	{



		echo '<script type="text/javascript">';
				echo 'alert("Please fill every field!"); window.location = "index.php#toregister";';
			    echo '</script>';



		header("index.php");
	
    }
	else
	{
		if ($password !== $confirm_password)
		 	{ 

				echo '<script type="text/javascript">';
				echo 'alert("Passwords dont match!"); 	window.location = "index.php#toregister";';
				echo '</script>';
				header("index.php");		


			}
			else
			{
				$conn->query("insert into members (username,password,firstname,lastname,gender,image) values ('$username','$password','$firstname','$lastname','$gender','images/No_Photo_Available.jpg')");
				echo '<script type="text/javascript">';
				echo 'alert("Sign up sucess! Please login."); window.location = "index.php";';
			    echo '</script>';
				header("index.php");
				}

			}
				?>

</body>
</html>
