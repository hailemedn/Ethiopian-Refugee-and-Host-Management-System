<?php
include('dbcon.php');
$username = $_POST['un'];
$password = $_POST['pass'];

$query = $conn->query("select * from admintbl where username = '$username' and password = '$password'");
$count = $query->rowcount();
$row = $query->fetch();
if ($count > 0){
session_start();
$_SESSION['un'] = $row['username'];
 header('location:adminhome.php'); 
}else{

    echo '<script>alert("Wrong login information!!"); window.location = "admin_login_form.php";</script>';

}
?>