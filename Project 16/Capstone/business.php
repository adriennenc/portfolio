<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
/* $name = $type = $email = $password = $verification = "";
$name_err = $type_err = $email_err = $fname_err = $password_err = $verification_err = ""; */
$email = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
	// Valaccountidate business name
	/* if(empty(trim($_POST["name"]))){
		$name_err = "<br><b>Business Name</b>";
	} else{
		// Prepare a select statement
		$sql = "SELECT accountaccountid FROM account WHERE name FROM business = ?";
		
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "s", $param_name);
			
			// Set parameters
			$param_name = trim($_POST["name"]);
			
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				/* store result */
				/*mysqli_stmt_store_result($stmt);
				
				if(mysqli_stmt_num_rows($stmt) == 1){
					$name = trim($_POST["name"]);
				}
			} else{
				echo "Oops! Something went wrong. Please try again later.";
			}
		}
		 
		// Close statement
		mysqli_stmt_close($stmt);
	}
	
	// Valaccountidate business type
	if(empty(trim($_POST["type"]))){
		$type_err = "<br><b>Business Type</b>";
	} else{
		// Prepare a select statement
		$sql = "SELECT accountaccountid FROM account WHERE type FROM business = ?";
		
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "s", $param_type);
			
			// Set parameters
			$param_type = trim($_POST["type"]);
			
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				/* store result */
				/*mysqli_stmt_store_result($stmt);
				
				if(mysqli_stmt_num_rows($stmt) == 1){
					$type = trim($_POST["type"]);
				}
			} else{
				echo "Oops! Something went wrong. Please try again later.";
			}
		}
		 
		// Close statement
		mysqli_stmt_close($stmt);
	}
	 */
	
	// Valaccountidate Email	
	if(empty(trim($_POST["email"]))){
		$email_err = "<br><b>Email.</b>";
	} else{
		// Prepare a select statement
		$sql = "SELECT accountid FROM account WHERE email = ?";
		
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "s", $param_email);
			
			// Set parameters
			$param_email = trim($_POST["email"]);
			
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				/* store result */
				mysqli_stmt_store_result($stmt);
				
				if(mysqli_stmt_num_rows($stmt) == 1){
					$email_err = "<br><b>This email is already taken.</b>";
				} else{
					$email = trim($_POST["email"]);
				}
			} else{
				echo "Oops! Something went wrong. Please try again later.";
			}
		}	
		 
		// Close statement
		mysqli_stmt_close($stmt);
	}
 
	// Valaccountidate password
	if(empty(trim($_POST['password']))){
		$password_err = "<br><b>Password.</b>";     
	} elseif(strlen(trim($_POST['password'])) < 6){
		$password_err = "<br><b>Password must have atleast 6 characters.</b>";
	} else{
		$password = trim($_POST['password']);
	}
	
	// Valaccountidate confirm password
	if(empty(trim($_POST["verification"]))){
		$verification_err = '<br><b>Please confirm password.</b>';     
	} else{
		$verification = trim($_POST['verification']);
		if($password != $verification){
			$verification_err = '<br><b>Password and accountid do not match.</b>';
		}
	}
	
	// Check input errors before inserting in database
	if(empty($name_err) && empty($type_err) && empty($email_err) && empty($password_err) && empty($confirm_err)){
		
		// Prepare an insert statement
		$sql = "INSERT INTO account (email, password) VALUES (?, ?)";
		 
		if($stmt = mysqli_prepare($link, $sql)){
			
			// Set parameters
			$param_email = $email;
			//$param_name = $name;
			$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
			//$param_name = $name;
			
			
			
			
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);
		
			
			
			
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				// Redirect to login page
				header("location: home.php");
			} else{
				echo mysqli_stmt_error($stmt);
				
				
				
			}
		}
		 
		// Close statement
		mysqli_stmt_close($stmt);
	}
	
	// Close connection
	mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PetNet Business Registration Page</title>
	<meta charset="utf-8">
		<title>Pet Net</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
		<!-- <link rel="stylesheet" type="text/css" href="assets/css/normalize.css"> -->
		
		<!-- Stylesheets -->
		
		<link href="styles.css" rel="stylesheet" type="text/css" media="all">
		
		<!-- <link href="assets/css/info.css" rel="stylesheet" type="text/css" media="all"> -->
		
		

		<!--[if lt IE 9]>
    		<script src="assets/components/html5shiv/html5shiv.min.js"></script>
		<![endif]-->
</head>
<body>
	<img class = "logo" src = "petnet.gif" alt="PetNet">
		
	<nav class = "nav1"> </nav>
	<nav class = "nav2"> </nav>

	<center>
	<div class="wrapper">
		<h2>Sign Up As A Business</h2>
		<p>Please fill this form to create an account.</p>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
				<label><h3>Business Name:<sup>*</sup></h3></label>
				<input type="text" name="name"class="form-control" value="<?php echo $name; ?>">
				<span class="help-block"><?php echo $name_err; ?></span>
			</div> 
			<div class="form-group <?php echo (!empty($type_err)) ? 'has-error' : ''; ?>">
				<label><h3>Business Type:<sup>*</sup></h3></label>
				<input type="text" name="name"class="form-control" value="<?php echo $type; ?>">
				<span class="help-block"><?php echo $type_err; ?></span>
			</div> 
			<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
				<label><h3>Email:<sup>*</sup></h3></label>
				<input type="text" name="email"class="form-control" value="<?php echo $email; ?>">
				<span class="help-block"><?php echo $email_err; ?></span>
			</div>    
			<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
				<label><h3>Password:<sup>*</sup></h3></label>
				<input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
				<span class="help-block"><?php echo $password_err; ?></span>
			</div>
			<div class="form-group <?php echo (!empty($verification_err)) ? 'has-error' : ''; ?>">
				<label><h4>Confirm Password:<sup>*</sup></h4></label>
				<input type="password" name="verification" class="form-control" value="<?php echo $verification; ?>">
				<span class="help-block"><?php echo $verification_err; ?></span>
			</div>
			<br>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Submit">
				<input type="reset" class="btn btn-default" value="Reset">
			</div>
			<br>
			<p>Already have an account? <a href="login.php">Login here</a>.</p>
		</form>
	</div>
	</center>
	 <div class="copyright">
      <div class="container">
        <!--left part-->
        <div class="col-md-4"></div>
        <!--middle part-->
        <div class="col-md-4"><div class="f-logo" color="white"><div class="copy">
            <p>Copyright © 2018 PetNet. All rights reserved.</p></div>
        </div>
        </div>
        
       <div class="clear"></div>
      </div>
       </div>
	<!--<footer>
		<p><a href = "http://cgi.soic.indiana.edu/~team44/login.php"> Created by PetNet &copy 2018</p>
	</footer> -->
</body>
</html>