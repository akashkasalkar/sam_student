<?php 

	include "../include/dbconn.php";
	if (!empty($_POST['state_id'])) {
		$state_id=$_POST['state_id'];
		$qry="select * from city where state_id='$state_id'";
		$exc=mysqli_query($conn,$qry);
		while ($row=mysqli_fetch_array($exc)) {
			?>
			<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
			<?php
		}
	}
?>