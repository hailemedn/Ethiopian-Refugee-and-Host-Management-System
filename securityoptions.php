<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>

    <?php
	$query = $conn->query("select * from members where member_id = '$session_id'");
	$row = $query->fetch();
	$id = $row['member_id'];
	?>

    <div>
        <form name="ChangePass" method="post" action="changepass.php" onSubmit="return validatePassword()">

        <h2>Change Password</h2>

        <table>
       
           
<tr>                   
<td> <label>Current Password</label> </td>
<td> <input type="password" name="currentPassword"> </td>
</tr>


<tr>       
<td>  <label>New Password</label> </td>
<td>  <input type="text" name="newPassword"> </td>
</tr>

<tr>
<td>  <label>Confirm Password</label> </td>
<td>  <input type="text" name="confirmPassword"> </td>
</tr>


<tr>   
<td>  <input type="submit" name="submit" class="btn btn-success" value="Submit"> </td>
</tr>


</table>
        </form>
</div>



<hr/>


<div>

<form name="DelAcc" method="post" action="DelAcc.php" onSubmit="return validatePassword()">

<h2>Delete Account</h2>

<table>

<tr>       
<td>  <label>Password</label> </td>
<td>  <input type="text" name="Dpassword"> </td>
</tr>

<tr>
<td>  <label>Reason for deletion</label> </td>
<td>  <textarea id="ReasonDel" name="ReasonDel" rows="4" cols="50">Reason</textarea>
</td>
</tr>

<tr>   
<td>  <input type="hidden" name="delete_id" value="<?php echo $row['member_id'] ?>"> </td>  
<td>  <input type="submit" name="Delete" class="btn btn-success" value="Delete"> </td>
</tr>

</table>
</form>
</div>






</body>










