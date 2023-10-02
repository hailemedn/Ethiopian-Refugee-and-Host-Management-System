<?php
include('dbcon.php');
$msg = "";
if (isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm_password = $_POST['cpassword'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];

	if (empty($username) || empty($password) || empty($cpassword) || empty($firstname) || empty($lastname) || empty($gender))
	{
            $msg = "<div class='alert alert-danger'>All fields are required.</div>";
	}
	else 
	{
		if ($password !== $cpassword)
		 	{
	  			$msg = "<div class='alert alert-danger'>Password and confirm password do not match.</div>";
			}
			else
			{
        	$msg = "<div class='alert alert-success'>Register successfully completed.</div>";
					$username = "";
					$password = "";
					$confirm_password = "";
					$firstname = "";
					$lastname = "";
      }
	}



$conn->query("insert into members (username,password,firstname,lastname,gender,image) values ('$username','$password','$firstname','$lastname','$gender','images/No_Photo_Available.jpg')");

}?>

<head>
  <link rel="stylesheet" href="css/Signup.css">
</head>
<body>

<!--form  action="signup_save.php" method="post" autocomplete="on"-->
<div class="wrapper">
  <h2 class="title">Signup</h2>
  <?php echo $msg; ?>
  <form class="form" action="signup_save.php" method="post">
    <div class="input-field">
      <input id="Username" class="input" name="username"  type="text" placeholder="Username">
    </div>
    <div class="input-field">
      <input id="password" class="input" name="password" type="password" placeholder="Password">
    </div>
    <div class="input-field">
      <input id="cpassword" class="input" name="cpassword" type="password" placeholder="confirm password">
    </div>
    <div class="input-field">
      
      <input id="firstname" class="input" name="firstname" type="text" placeholder="firstname">
    </div>
    <div class="input-field">
      
      <input id="lastname" class="input" name="lastname" type="text" placeholder="lastname">
    </div>
    <div class="input-field">
      <label for="gender" class="input-label" >Gender</label>
      <select name="gender" class="input-label">
        <option value="Male" selected>Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
    <button type="submit" class="btn" name="submit"> Signup</button>
    <p class="change_link">
									Have an account ?
									<a href="#tologin" class="to_login">login</a>
			</p>
  </form>

  </form>

</div>



</body>
