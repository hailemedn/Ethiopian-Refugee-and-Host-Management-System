<?php include('header.php'); ?>    
<?php include('session.php'); ?>  
<?php include('dbcon.php'); ?>  


<?php
$quer = $conn->query("select * from members where member_id = '$session_id'");
$row = $quer->fetch();
$pass = $row['password'];

$npass = $_POST['newPassword'];
$cpass = $_POST['confirmPassword'];

if($npass!==$cpass){

    echo '<script>alert("New passwords dont match!!"); window.location = "securityoptions.php";</script>';
 
}
else{
if ($_POST['currentPassword'] ==  $pass){




    $conn->query("update members set password = '$npass' where member_id = '$session_id'");
    echo '<script>alert("Done!!"); window.location = "securityoptions.php";</script>';
    header("changepass.php");


} else {
    echo '<script>alert("Wrong password!!"); window.location = "securityoptions.php";</script>';
  

}

}
?>