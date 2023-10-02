<?php include('header.php'); ?>    
<?php include('session.php'); ?>  
<?php include('dbcon.php'); ?>  


<?php
	$quer = $conn->query("select * from members where member_id = '$session_id'");
	$row = $quer->fetch();
    $pass = $row['password'];



  if ($_POST['Dpassword'] ==  $pass){

if(isset($_POST['Delete']))
{

   $id = $_POST['Delete'];
   $que = $conn->query("DELETE FROM members where member_id='$session_id'");

            if($que) {

        $_SESSION['success']= "Account has been DELETED";
        session_destroy();
        header('location:index.php');
  
                } else {
                    $_SESSION['status']= "Something went wrong!";
                    //    header('Location:index.php'); 
                       }
}

} else {

    echo "<script>alert('Wrong password!!')</script>";
    
}

?>