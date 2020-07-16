<!DOCTYPE html>
<html>
<head>
	<title>update student</title>
	
	
</head>
<body>
	<?php
			include("top_nav.php");
		
		?>

		<div class="container">
		<center><h1>UPDATE STUDENT</h1></center>
  
      
    
      	
     	<?php
     	include("../include/dbconn.php");
     	 	$student_id=$_GET['student_id'];
			$qry="select * from users where id='$student_id'";
			$exc=mysqli_query($conn,$qry);
			while ($row=mysqli_fetch_array($exc)) {
		?>
			<form method="post" action="">
				<div class="form-group">
					<label>Student Id</label>
					<input type="text" class="form-control" name="student_id" value="<?php echo $row['id'];?>" required="" disabled>
					<input type="hidden" class="form-control" name="student_id" value="<?php echo $row['id'];?>">
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>First name</label>
							<input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>"  required="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Last name</label>
							<input type="text" class="form-control" name="lname" value="<?php echo $row['lname'];?>"  required="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>"  required="">
						</div>
					</div>
					<div class="col-lg-6">
						<label>Phone</label>
						<input type="number" name="phone" class="form-control" value="<?php echo $row['ph']; ?>" required>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="form-group">
							<label>Country</label>
							<input type="text" class="form-control" name="country"  value="<?php echo $row['country'];?>" required="">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<label>State</label>
							<input type="text" class="form-control" name="state"  value="<?php echo $row['state'];?>" required="">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<label>City</label>
							<input type="text" class="form-control" name="city"  value="<?php echo $row['city'];?>" required="">
						</div>
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-success" name="update">Update</button>
				</div>
		</form>
			<?php } 
			?>
			<?php 

			if (isset($_POST['update']))
			 {
				$student_id=$_GET['student_id'];

				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$country=$_POST['country'];
				$state=$_POST['state'];
				$city=$_POST['city'];

				
				$sql="update users set fname='$fname',lname='$lname',email='$email',ph='$phone',country='$country',state='$state',city='$city' WHERE id='$student_id'";
				$exc=mysqli_query($conn,$sql);
				if($exc==true){
						echo "<script>alert('data updated successfully');
							window.location='view_all_user.php';
						</script>";
					}
					else {
							echo "<script>alert('error');
							
						</script>"; # code...
						}	
				
				}
			?>
		</div>
	</body>
</html>