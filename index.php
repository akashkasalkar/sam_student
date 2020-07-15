<?php
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$("#countries").change(function(){
				var country_id = $("#countries").val();
				$.ajax({
					url: 'data.php',
					method: 'post',
					data: 'country_id=' + country_id
				}).done(function(states){
					console.log(states);
					states = JSON.parse(states);
					$('#states').empty();
					states.forEach(function(states){
						$('#states').append('<option>' + states.name + '</option>')
					})
				})
			})
        })

        
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
   
<!------ Include in HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free Account</p>
	<form>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="First name" type="text" required="true">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Last name" type="text" required="true">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Email address" type="email" required="true"> 
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone" ></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+91</option>
		    <option value="1">+93</option>
		    <option value="2">+355</option>
		    <option value="3">+907</option>
		</select>
    	<input name="" class="form-control" placeholder="Phone number" type="text" required="true">
    </div> <!-- form-group// -->
    <div class="form-check" required="true">
        <span class = "label label-default">Select Gender</span>
        <br>
        <input type="radio" class="form-check-input" id="materialChecked" name="materialExampleRadios" checked>
        <label class="form-check-label" for="materialChecked">Male</label>
        <br>
        <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
        <label class="form-check-label" for="materialUnchecked">Female</label>
        <br>
        <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
        <label class="form-check-label" for="materialUnchecked">Choose not to disclose</label>
    </div>


    <!-- Select Country & State-->
    <br>
    <div class="container" required="true">
		<label class="text-center">Select Country & State </label>
		<div class="row">
		    <div class="col-md-6 col-md-offset-3">
				<form role="form" method="post" action="">
		        	<div class="row">
		                <div class="form-group">
		                    <label for="countries">Country</label>
		                    <select class="form-control" id="countries" name="countries">
		                    	<option selected=" " disabled="">Select Country</option>
		                    	<?php 
		                    		require 'data.php';
		                    		$countries = loadCountries();
		                    		foreach ($countries as $country) {
		                    			echo "<option id='".$country['id']."' value='".$country['id']."'>".$country['country_name']."</option>";
		                    		}
		                    	 ?>
		                    </select>
		                </div>
		            </div>
		            <div class="row">
		                <div class="form-group">
		                    <label for="states">State</label>
		                    <select class="form-control" id="states" name="states">
		                    	
		                    </select>
		                </div>
		            </div>
		        </form>
		    </div>
		</div>
	</div>
    <br>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" type="password" required="true">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Repeat password" type="password" required="true">
    </div> <!-- form-group// -->  
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
        <button type="submit" class="btn btn-primary btn-block" > Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an Account? <a href="login.php">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->