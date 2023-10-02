<?php
include('dbcon.php');

session_start();
if (!isset($_SESSION['un'])){
header('location:admin_login_form.php');
}
$session_id = $_SESSION['un'];
$session_query = $conn->query("select * from admintbl where username = '$session_id'");
//$user_row = $session_query->fetch();
//$username = $user_row['firstname']." ".$user_row['lastname'];
//$image = $user_row['image'];
?>