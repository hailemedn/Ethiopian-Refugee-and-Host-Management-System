<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel">
        <div class="panel-body">
          <div class="row">    
            <br>
				<?php




if (isset($_GET['id'])){

    $frid = $_GET['id'];
    
	$query = $conn->query("select * from photos where member_id='$frid'");
	while($row = $query->fetch()){
	$id = $row['photos_id'];
	?>
            <div class="col-md-2 col-sm-3 text-center">
				<img class="photo" src="<?php echo $row['location']; ?>" height="300"> 
				<hr>
				<?php } }?>
      </div>

          </div>
          <hr>
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