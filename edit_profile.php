 <?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>
			<div id="masthead">  
				<div class="container">
					    <div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" width="160"></center>
		<hr>
		<button class="btn btn-success">Change Profile Picture</button>
      </div>
		<div class="col-md-10">
			<?php
	$query = $conn->query("select * from members where member_id = '$session_id'");
	$row = $query->fetch();
	$id = $row['member_id'];
	?>
	<hr>

	<form method="post" action="save_edit.php">
		<input type="hidden" name="member_id" value="<?php echo $id; ?>">
		<div class="forme">
		<div class="inputfielde">
			<label for="">Firstname: </label>
			<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>">
			<label for="">Lastname: </label>
			<input type="text" name="lastname" value="<?php echo $row['lastname']; ?>">
		</div>
		<hr>
		<div class="inputfielde">
			<label for="">Username: </label>
			<input type="text" name="username" value="<?php echo $row['username']; ?>">

			<label for="">Gender: </label>
			<div class="custom-selecte">
				<select name="gender" style="width:195px;height:35px">
					<option value="Male" selected>Male</option>
					<option  value="Female">Female</option>
				</select>
			</div>
		</div>
		<hr>
		<div class="inputfielde">
			<label for="">Birthdate: </label>
			<input name="birthdate" type="date" value="<?php echo $row['birthdate']; ?>">

			<label for="">Region: </label>
			<div class="custom-selecte">
				<select name="region" style="width:195px;height:35px">
					<option>Afar</option>
					<option>Amhara</option>
					<option>Benishangul-Gumuz</option>
					<option>Gambela</option>
					<option>Harari</option>
					<option>Oromia</option>
					<option>Sidama</option>
					<option>Somali</option>
					<option>South West</option>
					<option>Southern</option>
					<option>Tigray</option>
				</select>
			</div>
		</div>
		<hr>
		
		<div class="inputfielde">
			<label for="">Address: </label>
			<input name="address" type="text" value="<?php echo $row['address']; ?>">
			
			<label for="">Status: </label>
			<div class="custom-selecte">
				<select name="status" style="width:195px;height:35px">
					<option></option>
					<option>Refugee</option>
					<option>Host</option>
				</select>
			</div>

			
		</div>
		<hr>
		<div class="inputfielde">
			<label for="">Hometown: </label>
			<input name="hometown" type="text" value="<?php echo $row['hometown']; ?>">

			<label for="">Mobile: </label>
			<input name="mobile" type="text" value="<?php echo $row['mobile']; ?>">
		</div>
		<hr>
		<div class="inputfielde">
			<label for="">Work: </label>
			<input name="work" type="text" value="<?php echo $row['work']; ?>">

			<label for="">Religion: </label>
			<input name="religion" type="text" value="<?php echo $row['religion']; ?>">
		</div>
		<hr>
		<div class="inputfielde">
			<label for="">Capacity: </label>
			<input name="capacity" type="text" value="<?php echo $row['capacity']; ?>">
		</div>
		<br>
		<br>
		<div class="inputfielde">
			<button name="save" class="btn btn-success" style="width:30%;font-size:20px;margin-left:16%;">Save</button>
			<a href="securityoptions.php" style="color:white;" ><button style="color:white; background-color:blue; width:30%; font-size:20px; margin-left:16%;">Security</a>

		</div>
		<hr>
		<br>
		
			
		
	<br>
		</div>
		


</form>
		
<form>
</form>


</div>



    </div> 
				</div>
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"> </div>
					</div>
					</div> 
				</div>
			</div>



                                                
                                                                                
<?php include('footer.php'); ?>
        
    </body>
</html>