<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
<?php 
$search = $_POST['search']; 
?> 

    <body>
	<?php include('navbar.php'); ?>
    
			<div id="masthead">  
				<!-- /cont -->
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"> <h2 style="Color:black;">REFUGEES LOOKING FOR A HOME</h2></div>
                        <div class="top-spacer">
                        <form class="form-inline" method="post" action="refugee-search.php">
                            <input type="text" name="search" class="form-control"  id="span5" placeholder="Search by Name">
                            
                        </form>
                                
                            
                        </div>
					</div>
					</div> 
				</div><!-- /cont -->
			</div>
<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel">
        <div class="panel-body">
          <!--/stories-->
          <div class="row">    
            <br>
	<?php
	
	$query = $conn->query("select  * from members where status LIKE 'Refugee' AND firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR region LIKE '%$search%' OR capacity <= '$search'");
	$count = $query->rowcount();
	if ($count > 0){ 
	while($row = $query->fetch()){
	$posted_by = $row['firstname']." ".$row['lastname'];
	$posted_image = $row['image'];
	$friend_id = $row['member_id'];
    $status = $row['status']
	?>
            <div class="col-md-2 col-sm-3 text-center">
             <img  src="<?php echo $posted_image; ?>" style="height:100px" class="img-circle"></a>
            </div>
            
            <div class="col-md-10 col-sm-9">
             	<div class="alert"><?php echo $posted_by; ?></div>
              <div class="row">
                <div class="col-xs-9">
				<form method="post" action="add_friend.php">
                                <div class="col-xs-3">
								<input type="hidden" name="my_friend_id" value="<?php echo $friend_id; ?>">
		<?php $query1 = $conn->query("select * from friends where my_friend_id = '$friend_id'");
			  $count1 = $query1->rowcount();
			  if ($count1 > 0){ echo 'All Ready Friend'; }else{
		?>	
								<button  class="btn btn-info"><i class="icon-plus-sign"></i> connect</button>
			<?php } ?>
								</div>
                  </h4></div>
				</form>
              </div>
              <br><br>
            </div>
	<?php } }else{ ?> &nbsp;&nbsp;&nbsp;&nbsp; No Result Found.  <?php } ?>		
          </div>
          <hr>
        </div>
      </div>
   	</div><!--/col-12-->
  </div>
</div>
<?php include('footer.php'); ?>
    </body>
</html>