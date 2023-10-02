<?php
include('dbcon.php');
include('session.php');


$adminid = "Admin";
$friend_id  ="select  * from message";
$my_message  = $_POST['message'];
$conn->query("SET FOREIGN_KEY_CHECKS=0;insert into message(reciever_id,content,date_sended,sender_id) values('$friend_id','$my_message',NOW(),'$adminid');SET FOREIGN_KEY_CHECKS=1;");?>
<script>alert('Message Sent');</script>











<script>window.location = 'broadcast.php'; </script>
 










