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

            <div class="col-md-6 col-sm-3 text-center">

			Announcements
				<hr>
				<?php 
				$query = $conn->query
				("select * from message where reciever_id = '0'");
				while($row = $query->fetch()){
				$id = $row['message_id'];
				?>
				<div class="mes">
				<div class="message"><?php echo $row['content']; ?>
				<hr>
				<div class="pull-left"><?php echo $row['date_sended']; ?></div>
				<div class="pull-right">Sent by: <?php echo "Admin";?>
			    </div>
				

				<hr>
				<br>
				</div>
				</div>
				<?php } ?>



            </div>
	
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