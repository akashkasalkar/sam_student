<?php
	include "../include/dbconn.php";
	if (!empty($_POST['country_id'])) {
		$country_id=$_POST['country_id'];
		$qry="select * from states where country_id='$country_id'";
		$exc=mysqli_query($conn,$qry);
		echo "<option>Select state</option>";
		while ($row=mysqli_fetch_array($exc)) {
			?>
			<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
			<?php
		}
	}
	
 ?>