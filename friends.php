<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); 
	
	$frid = "";?>
			<div id="masthead">  
				
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"> </div> 
						<p class="change_link">
							
						</p>
						<p class="change_link">
							<a href="refugee.php" class="btn btn-success" style="width:200px">Connect with Refugees</a>
						</p>
						<p class="change_link">
							<a href="host.php" class="btn btn-success" style="width:200px">Connect with Hosts</a>
						</p>
						<p class="change_link">
							<a href="all.php" class="btn btn-success" style="width:200px">All Users</a>
						</p>
						
						
					</div>
					</div>
					</div> 
				</div><!-- /cont -->
			</div>
			<div class="container">
					
				</div><!-- /cont -->
				<div class="container">
					
				</div>
<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel"> 
        <div class="panel-body">

		<div class="row">    
            <br>
				<?php
	$query = $conn->query("select members.member_id , members.firstname , members.lastname , members.image ,members.status, friends.friends_id, friends.my_friend_id  from members  , friends
	where friends.my_friend_id = '$frid' and members.member_id = friends.my_id
	OR friends.my_id = '$session_id' and members.member_id = friends.my_friend_id
	");
	while($row = $query->fetch()){
	$friend_name = $row['firstname']." ".$row['lastname'];
	$friend_image = $row['image'];
	$friend_status = $row['status']; 
	$id = $row['friends_id'];
	$frid = $row['my_friend_id'];
?>

<div class="row">
<a href="friends_profile.php?id=<?php echo $frid;?>">      
            <div class="col-md-2 text-center">
			
			 <img  src="<?php echo $friend_image; ?>" style="height:100px" class="img-circle" >
	        
		</div></a>
				<div class="col-md-10">
					<div class="pull-right"><a href="delete_friend.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i>  Disconnect </a></div>
					<div class="alert"><?php echo $friend_name; ?></div>
					<div class="alert"><?php echo $friend_status; ?></div>
				</div>
            </div>
			<hr>
			<br><br>
	<?php } ?>		
          </div>
          <hr>
        </div>
      </div>
                                                                                       
	                                                
                                                      
   	</div>
  </div>
</div>
                                                                                                             
<?php include('footer.php'); ?>
        
    </body>
</html>