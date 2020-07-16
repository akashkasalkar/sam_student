<?php
	include("../include/dbconn.php");

	$student_id=$_GET['student_id'];
			
	$qry="DELETE FROM `users` WHERE `id`='$student_id'";
	$exe=mysqli_query($conn,$qry);
	if ($exe)
	 {
		echo "<script> alert('data deleted');
			window.location='view_all_user.php';
		</script>";
		
	}
	

?>