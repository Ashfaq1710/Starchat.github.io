<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create New Account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	
	<div class="signin-form">
    <form action="" method="post">
		<div class="form-header">
			<h2>Sign Up</h2>
			<p>Fill out this form and start chatting with your friends.</p>
		</div>
<div class="form-group">
			<label>User Name</label>
        	<input type="text" class="form-control" placeholder="Enter User Name" name="user_name" autocomplete="off" required="required">
        </div>
 <div class="form-group">
			<label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="user_pass" autocomplete="off" required="required">
        </div>


		<div class="form-group">
			<label>Email Address</label>
        	<input type="text" class="form-control" placeholder="someone@site.com" name="user_email" autocomplete="off" required="required">
        </div>
         <div class="form-group">
			<label>Country</label>
            <select class="form-control" name="user_country" required="" >
            	<option>India</option>
            	<option>Us</option>
            	<option>Uk</option>
            	<option>China</option>
            	<option>Bagladesh</option>
            	<option>Russia</option>
            </select>
        </div>

         <div class="form-group">
			<label>Gender</label>
            <select class="form-control" name="user_gender" required="" >
            	<option disabled="" >Select Your Gender</option>
            	<option>Male</option>
            	<option>Female</option>
            	<option>Others</option>
            	
            </select>
        </div>

        <div class="form-group">
        	<label class="checkbox-inline"> <input type="checkbox" required="">I accept the<a href="#"> Terms of User</a> &amp; <a href="#">Privacy Policy</a> </label>
        </div>
       
       
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
		</div>
			<?php  include("signup_user.php");  ?>
    </form>
	<div class="text-center small" style="color:#67428B;">Alraidy have an account? <a href="signin.php">Signin here</a></div>
</div>
<!-- footer -->
<?php include("include/footer.php"); ?>
</body>
</html>
