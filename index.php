<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<?php include "include/bs4.php"; ?>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>





<script type="text/javascript">
		

		function getState(val) {
			console.log("state here");
	$.ajax({
		type: "POST",
		url: "get_state.php",
		data:'country_id='+val,
		beforeSend: function() {
			$("#state-list").addClass("loader");
		},
		success: function(data){
			$("#state-list").html(data);
			$('#city-list').find('option[value]').remove();
			$("#state-list").removeClass("loader");
		}
	});
}


function getCity(val) {
	console.log(val);
	$.ajax({
		type: "POST",
		url: "get_city.php",
		data:'state_id='+val,
		beforeSend: function() {
			$("#city-list").addClass("loader");
		},
		success: function(data){
			$("#city-list").html(data);
			$("#city-list").removeClass("loader");
		}
	});
}
        
</script>

</script>
<script type="text/javascript">
(function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();
</script>

</head>
<body>
	<div class="container">
		<form method="post">
			<h2 class="text-danger text-center">Sign Up</h2>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="form-group">
						<label for="fname">First Name</label>
						<input type="text" name="fname" id="fname" class="form-control" placeholder="sam" required="">
					</div>
					<div class="form-group">
						<label for="lname">Last Name</label>
						<input type="text" name="lname" id="lname" class="form-control" placeholder="doe" required="">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="sam@gmail.com" required="">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="number" name="phone" id="phone" placeholder="9742526326" class="form-control" required="">
					</div>
					<div class="custom-control custom-radio custom-control-inline">
      					<input type="radio" class="custom-control-input" name="sex" id="customRadio1" name="male" value="M" checked="">
    					  <label class="custom-control-label" for="customRadio1">Male</label>
   					 </div>
   					 <div class="custom-control custom-radio custom-control-inline">
    					  <input type="radio" name="sex" class="custom-control-input" id="customRadio2" name="female" value="F">
    					  <label class="custom-control-label" for="customRadio2">Female</label>
   					 </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<label class="">Select Country  </label>
					<div class="form-group">
		                    
		                    <select class="form-control" id="countries" name="countries"  onChange="getState(this.value);">
		                    	<option selected=" " disabled="" >Select Country</option>
		                    	<?php
		                    		$qry="select * from country";
									$exc=mysqli_query($conn,$qry);
									while ($row=mysqli_fetch_array($exc)) {
									?>
										<option id="<?php echo $row['id'] ?>" value="<?php echo $row['id'] ?>"><?php echo $row['country_name']; ?></option>
									<?php
									}
		                    	 ?>
		                    	
		                    </select>
		                </div>
		                <div class="row">
		                	<div class="col-lg-6">
		                		<div class="form-group">
		                    		<label for="states">State</label>
		                   				 <select name="state" id="state-list"  onChange="getCity(this.value);" class="form-control">
             		   						<option selected=" " disabled="">Select State</option>
       					     			</select>
		               			 </div>
		                	</div>
		                	<div class="col-lg-6">
		                		 <div class="form-group">
				                    <label for="city">City</label>
				                   		 <select name="city" id="city-list" class="form-control">
		               					 	<option >Select City</option>
		           						 </select>
							 	 </div>
				            </div>
		                </div> 
					  <div class="form-group">
					  	<label for="password">Password</label>
					  	<input type="password" name="password" id="password" class="form-control" required="" placeholder="*****">
					  </div>
					  <div class="form-group">
					  	<label for="cpassword">Confirm Password</label>
					  	<input type="password" name="cpassword" id="cpassword" class="form-control" required="" placeholder="*****">
					  </div>
					  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
    </div> 
					  <div class="form-group">
					  	<button class="btn btn-primary" name="register">Register</button>
					  	<button class="btn btn-danger" name="clear" type="reset">Clear</button>
					  </div>
				
				</div>
			</div>
		</form>
		<?php
			if (isset($_POST['register'])) {
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$name=$fname.$lname;
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$password=$_POST['password'];
				$gender=$_POST['sex'];
				$country=$_POST['countries'];
				$state=$_POST['state'];
				$city=$_POST['city'];
				$created_date=date("Y-m-d h:i:s");	
				//echo "$created_date";
				$country_qry="select * from country where id='$country'";
				$exc=mysqli_query($conn,$country_qry);
				while ($row=mysqli_fetch_array($exc)) {
					$country_name=$row['country_name'];
				}

				$state_qry="select * from states where id='$state'";
				$exc2=mysqli_query($conn,$state_qry);
				while ($row2=mysqli_fetch_array($exc2)) {
					 $state_name=$row2['name'];
				}

				$city_qry="select * from city where id='$city'";
				$exc3=mysqli_query($conn,$city_qry);
				while ($row3=mysqli_fetch_array($exc3)) {
					$city_name=$row3['name'];
				}

				$qry="INSERT INTO `users`(`fname`, `lname`, `email`, `ph`, `password`, `gender`, `country`, `state`,`city`, `created_at`) VALUES('$fname','$lname','$email','$phone','$password','$gender','$country_name','$state_name','$city_name','$created_date')";
				$exc=mysqli_query($conn,$qry);
				if ($exc) {
					echo "<script>alert('You Register Successfully..')</script>";
				}
				else{
					echo "<script>alert('Error while adding data..')</script>";
				}
			}
		 ?>
	</div>
</body>
</html>