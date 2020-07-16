<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	
</head>
<body>
	<?php
			include("top_nav.php");
			
		?>

		<div class="container">
		<center><h1>Search Student</h1></center>
  
      <!--  <div class="panel-heading">Forms</div> -->

      <div class="col-lg-6">
      	<form method="post">
      		<div class="form-group">
      			<label>Student Email</label>
      			<input type="email" name="email" class="form-control" placeholder="sam@gmail.com" required="">
      		</div>
      		<div class="form-group">
      			<button class="btn btn-success" name="search">Search</button>
      		</div>
      		
      	</form>
      </div>
      <?php 
      	if (isset($_POST['search'])) {
      		$email=$_POST['email'];
      		?>
      			<table class="table table-bordered text-center">
				<tr>

					<th>First Name</th>
					<th>Last name</th>
					<th>Email</th>
					<th>Gender</th>
					<th>Country</th>
					<th>State</th>
					<th>City</th>
				</tr>
				<?php
					include("../include/dbconn.php");
					$qry="select * from users where `email` LIKE '%$email'";
					$exc=mysqli_query($conn,$qry);
					
					while ($row=mysqli_fetch_array($exc))
					 {

				?>

						<tr>
							<?php $student_id=$row['id']; ?>
							 <td><?php  echo $row['fname'];?></td>
							 <td><?php  echo $row['lname'];?></td>
							 <td><?php  echo $row['email'];?></td>
							  <td><?php  echo $row['gender'];?></td>
							   <td><?php  echo $row['country'];?></td>
							   <td><?php  echo $row['state'];?></td>
							   <td><?php  echo $row['city'];?></td>
							 
									

							
							<td><a href="update_student.php?student_id=<?php echo $student_id;?>" class="btn btn-primary">Edit</a></td>
							<td><a href="delete_student.php?student_id=<?php echo $student_id;?>" class="btn btn-danger" onclick="return confirm('do you want to delete...?');">Delete</a></td>
						</tr>
						<?php
					
					}
			 ?>

			</table>



      		<?php 
      		# code...
      	}
      ?>
    
      	
      
		</div>


		<?php include('footer.php'); ?>
</body>
</html>