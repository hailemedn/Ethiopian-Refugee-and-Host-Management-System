<?php
session_start();
$connection = mysqli_connect("localhost","root","","socialdb");



if(isset($_POST['delete_btn']))
{
   $id = $_POST['delete_id'];
   $query = "DELETE FROM post where post_id='$id' ";
   $query_run = mysqli_query($connection,$query);

   if($query_run) 
   {
     $_SESSION['success']= "Your Data is DELETED";
     header('Location:posts.php');
   }
   else
   {
     $_SESSION['status']= "Your Data is NOT DELETED";
     header('Location:posts.php');
   }
}
?>