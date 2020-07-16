<!DOCTYPE html>
<html>
<head>
	<title>View All User</title>
	
</head>
<body>
	<?php
			include("top_nav.php");
			
		?>

		<div class="container">
		<center><h1>View Student</h1></center>
  
      <!--  <div class="panel-heading">Forms</div> -->

    		<p>Type something in the input field to search the table for first names, last names or emails:</p>  
  			<input class="form-control" id="myInput" type="text" placeholder="Search..">
  			<br>
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
				<tbody id="myTable">
					<?php
					include("../include/dbconn.php");
					$qry="select * from users ";
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
							 
									

						</tr>
					<?php 
      		# code...
      	}
      ?>
				</tbody>
				

			</table>



      		
    
      	
      
		</div>


		<?php include('footer.php'); ?>
		<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>