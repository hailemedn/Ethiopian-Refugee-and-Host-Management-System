<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    
   <body> 
	<?php include('navbar.php'); ?>

  <?php

  if (isset($_GET['id'])){
  
  $frid = $_GET['id'];
  
  
  $query = $conn->query("select * from members where member_id = '$frid'");
  $row = $query->fetch();
  $id = $row['member_id'];
  
  
  }
  
		?>  
  <div id="masthead">  
				<div class="container"> 
					    <div class="row">
	<div class="pull-right"><a href="friendsposts.php?id=<?php echo $frid;?>" class="btn"><i class="icon-pencil"></i> Posts</a></div>
	<div class="pull-right"><a href="friendsphotos.php?id=<?php echo $frid;?>" class="btn"><i class="icon-pencil"></i> Photos</a></div>
	
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $row['image']; ?>" width="160"></center>
		<hr>
      </div>
		<div class="col-md-10">
   
<?php // ?>
	<hr>

    Username:<label><?php echo $row['username']; ?></label>
	<hr>
	Firstname:<label><?php echo $row['firstname']; ?></label>
	<hr>
	Lastname:<label><?php echo $row['lastname']; ?></label>
	<hr>
	Gender:<label><?php echo $row['gender']; ?></label>
	<hr>
	Birthdate:<label><?php echo $row['birthdate']; ?></label>
	<hr>
	Region:<label><?php echo $row['region']; ?></label>
  <hr>
	Address:<label><?php echo $row['address']; ?></label>
	<hr>
	<hr>
	Hometown:<label><?php echo $row['hometown']; ?></label>
	<hr>
	<hr>
	Status:<label><?php echo $row['status']; ?></label>
	<hr>
	Work:<label><?php echo $row['work']; ?></label>
	<hr>
	Religion:<label><?php echo $row['religion']; ?></label>
	<hr>
	<hr>
	Capacity:<label><?php echo $row['capacity']; ?></label>

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