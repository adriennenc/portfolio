<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$fname = $lname = $email = $password = $confirm_password = "";
$fname_err = $lname_err = $email_err = $password_err = $confirm_password_err =  "";
//$email = $password = "";
//$email_err = $password_err = "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	// Validate fname
	if(empty(trim($_POST['fname']))){
		$fname_err = "Please Enter Your First Name.";     
	} else{
		$fname = trim($_POST['fname']);
	}
	
	// Validate lname
	if(empty(trim($_POST['lname']))){
		$lname_err = "Please Enter Your Last Name.";     
	} else{
		$lname = trim($_POST['lname']);
	}
 
	/* // Validate first name
	if(empty(trim($_POST["fname"]))){
		$fname_err = "<br><b>Please Enter Your First Name.</b>";
	} else{
		// Prepare a select statement
		$sql = "SELECT accountid FROM account WHERE fname = ?";
		//$sql2 = "SELECT owner.accountid FROM owner WHERE owner.fname = ?";
		
		//$sql = "SELECT fname FROM owner WHERE fname = ?";
		
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "s", $param_fname);
			
			// Set parameters
			$param_fname = trim($_POST["fname"]);
			
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				//store result
				mysqli_stmt_store_result($stmt);
				
				if(mysqli_stmt_num_rows($stmt) == 1){
					$fname_err = trim($_POST["fname"]);
				} else{
					$fname = trim($_POST["fname"]);
				}
			} else{
				echo "Oops! Something went wrong. Please try again later.";
			}
		}
		 
		// Close statement
		mysqli_stmt_close($stmt);
	}
	
	// Validate last name
	if(empty(trim($_POST["lname"]))){
		$lname_err = "<br><b>Please Enter Your Last Name.</b>";
	} else{
		// Prepare a select statement
		$sql = "SELECT accountid FROM account WHERE lname = ?";
		//$sql2 = "SELECT owner.accountid FROM owner WHERE owner.lname = ?";
		
		
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "s", $param_lname);
			
			// Set parameters
			$param_lname = trim($_POST["lname"]);
			
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				//store result
				mysqli_stmt_store_result($stmt);
				
				if(mysqli_stmt_num_rows($stmt) == 1){
					$lname_err = trim($_POST["lname"]);
				} else{
					$lname = trim($_POST["lname"]);
				}
			} else{
				echo "Oops! Something went wrong. Please try again later.";
			}
		}
		 
		// Close statement
		mysqli_stmt_close($stmt);
	}  */

	// Validate Email	
	if(empty(trim($_POST["email"]))){
		$email_err = "<br><b>Please Enter Your Email.</b>";
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
				
				//store result
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
 
	// Validate password
	if(empty(trim($_POST['password']))){
		$password_err = "<br><b>Please Enter Your Password.</b>";     
	} elseif(strlen(trim($_POST['password'])) < 6){
		$password_err = "<br><b>Password must have at least 6 characters.</b>";
	} else{
		$password = trim($_POST['password']);
	}
	
	// Valaccountidate confirm password
	if(empty(trim($_POST["confirm_password"]))){
		$confirm_password_err = '<br><b>Please Confirm Your Password.</b>';     
	} else{
		$confirm_password = trim($_POST['confirm_password']);
		if($password != $confirm_password){
			$confirm_password_err = '<br><b>The passwords do not match.</b>';
		}
	}
	 
	// Check input errors before inserting in database
	if(empty($fname_err) && empty($lname_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
		
		// Prepare an insert statement
		$sql = "INSERT INTO account (fname, lname, email, password) VALUES (?, ?, ?, ?)";
		//$sql2 = "INSERT INTO owner (fname, lname) VALUES (?, ?)";
		//$stmt2 = mysqli_prepare($sql2))
		
		 
	   if($stmt = mysqli_prepare($link, $sql)){
			
			// Set parameters
			$param_fname = $fname;
			$param_lname = $lname;
			$param_email = $email;
			$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
			
			
	
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "ssss", $param_fname, $param_lname, $param_email, $param_password);
		
			$hash = uniqid();
			$sql2 = "INSERT INTO verify (email, password) VALUES (?, ?)";
			$stmt2 = mysqli_prepare($link,$sql2);
			mysqli_stmt_bind_param($stmt2, "ss",$email,$hash);
			
			
			// Attempt to execute the prepared statement
			
			
				
			if(mysqli_stmt_execute($stmt)){
				mysqli_stmt_execute($stmt2);
				$to = $email; // Send email to our user
				$subject = 'Signup | Verification'; // Give the email a subject 
				$message = '
 
				Thanks for signing up at PetNet!
				Your account has been created.
 
				Please click this link to activate your account:
				http://cgi.soic.indiana.edu/~team44/verify.php?id='.$email.'&hash='.$hash.'
 
				'; // Our message above including the link
                     
				$headers = 'From:noreply@pet-net' . "\r\n"; // Set from headers
				mail($to, $subject, $message, $headers); // Send our email
				// Redirect to login page
				header("location: redirect.html");
			} else{
				echo mysqli_stmt_error($stmt);
			}
				
				
				
			
			
		}
		 
		// Close statement
		mysqli_stmt_close($stmt);
		mysqli_stmt_close($stmt2);
	}
	
	// Close connection
	mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PetNet Registration Page</title>
	<meta charset="utf-8">
		<title>Pet Net</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
		<!-- <link rel="stylesheet" type="text/css" href="assets/css/normalize.css"> -->
		
		<!-- Stylesheets -->
		
		
		<link href="styles.css" rel="stylesheet" type="text/css" media="all" />
		
		<link rel="stylesheet" href="css/basic.css" type="text/css" media="all" />
		
		<link href="assets/css/info.css" rel="stylesheet" type="text/css" media="all">
		
		

		<!--[if lt IE 9]>
    		<script src="assets/components/html5shiv/html5shiv.min.js"></script>
		<![endif]-->
</head>
<body>
	<center>
	
	<img class = "logo" src = "petnet.gif" alt="PetNet">
		
	<nav class = "nav1"> </nav>
	<nav class = "nav2"> </nav>
		
	<div class="wrapper">
		<h2>Sign Up As A Regular User</h2>
		<p>Please fill this form to create an account.</p>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="form-group <?php echo (!empty($fname_err)) ? 'has-error' : ''; ?>">
				<label><h3>First Name:<sup>*</sup></h3></label>
				<input type="text" name="fname"class="form-control" value="<?php echo $fname; ?>">
				<span class="help-block"><?php echo $fname_err; ?></span>
			</div> 
			<div class="form-group <?php echo (!empty($lname_err)) ? 'has-error' : ''; ?>">
				<label><h3>Last Name:<sup>*</sup></h3></label>
				<input type="text" name="lname"class="form-control" value="<?php echo $lname; ?>">
				<span class="help-block"><?php echo $lname_err; ?></span>
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
			<div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
				<label><h4>Confirm Password:<sup>*</sup></h4></label>
				<input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
				<span class="help-block"><?php echo $confirm_password_err; ?></span>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Submit">
				<input type="reset" class="btn btn-default" value="Reset">
			</div>
			<p>Already have an account? <a href="login.php">Login here</a>.</p>
		</form>
	</div>
	</center>
	 <div class="copyright">
      <div class="container">
        <!--left part-->
        <div class="col-md-4"></div>
        <!--middle part-->
        <div class="col-md-4"><div class="f-logo" color="white" align = "center"><div class="copy">
            <center><p>Copyright © 2018 PetNet. All rights reserved.</p><center></div>
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