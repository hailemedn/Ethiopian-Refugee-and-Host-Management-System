    <div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>"width="160"></center>
		<hr>
		<a class="btn btn-success" href="change_pic.php">Change Profile Picture</a>
      </div>
		<div class="col-md-10">
			<hr>
			<div class="pull-right"><a href="edit_profile.php" class="btn btn-success" style="width:200px"><i class="icon-pencil"></i> Edit Profile</a></div>
			<div class="pull-right"><a href="myposts.php" class="btn btn-success" style="width:200px"><i class="icon-pencil"></i> Posts</a></div>
	
			<h2 style="color:grey;">Personal Info</h2>
				<?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			?>
			<hr>
			<div class="forme">
				<div class="inputfielde">
					<label for="">Name: </label>
					<div class="outputs">
						<?php echo $row['firstname']." ".$row['lastname']; ?>
					</div>
					
					<label for="">Gender: </label>
					<div class="outputs">
						<?php echo $row['gender']; ?>
					</div>
					
				</div>
				<hr>
				<div class="inputfielde">
					<label for="">Address: </label>
					<div class="outputs">
						<?php echo $row['address']; ?>
					</div>
					

					<label for="">Hometown: </label>
					<div class="outputs">
						<?php echo $row['hometown']; ?>
					</div>
					
				</div>
				<hr>
				<div class="inputfielde">
					<label for="">Region: </label>
					<div class="outputs">
						<?php echo $row['region']; ?>
					</div>
					

					<label for="">Birthdate: </label>
					<div class="outputs">
						<?php echo $row['birthdate']; ?>
					</div>
					
				</div>
				<hr>
				<div class="inputfielde">
					<label for="">Contact Number: </label>
					<div class="outputs">
						<?php echo $row['mobile']; ?>
					</div>
					

					<label for="">Status: </label>
					<div class="outputs">
						<?php echo $row['status']; ?>
					</div>
					
				</div>
				<hr>
				<div class="inputfielde">
					<label for="">Work: </label>
					<div class="outputs">
						<?php echo $row['work']; ?>
					</div>
					

					<label for="">Religion: </label>
					<div class="outputs">
						<?php echo $row['religion']; ?>
					</div>
					
				</div>
				<hr>
				<div class="inputfielde">
					<label for="">Capacity: </label>
					<div class="outputs">
						<?php echo $row['capacity']; ?>
					</div>
				</div>
				<hr>
			</div>
			<hr>
			
			
			</div>

    </div> 