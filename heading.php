    <div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" width="160"></center>
		<hr>
		<!-- <a class="btn btn-success" href="change_pic.php">Change Profile Picture</a> -->
      </div>
		<div class="col-md-5">
			<hr>
				<?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			
			?>
			<hr>
			<h2 style="color:#4e73df;"><?php echo $row['firstname']." ".$row['lastname']; ?><span class="margin-p"> </h2>
			<hr>
			<h3><?php echo $row['status']; ?></h3>
			<hr>
		</div>
      <div class="col-md-5">
			<form method="post" action="post.php">
						<textarea name="content" placeholder="Share your Story Here"></textarea>
						<br>
						<hr>
						<button class="btn btn-success"><i class="icon-share"></i> Share </button>
			</form>
      </div>
    </div> 