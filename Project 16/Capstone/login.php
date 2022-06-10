<?php
// Include config file
require_once 'config.php';
 

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST"){
 
	// Check if email is empty
	if (empty(trim($_POST["email"]))){
		$email_err = '<br><b>Please enter your email.</b>';
	} else{
		$email = trim($_POST["email"]);
	}
	
	// Check if password is empty
	if (empty(trim($_POST['password']))){
		$password_err = '<br><b>Please enter your password.</b>';
	} else {
		$password = trim($_POST['password']);
	}
	
	// Validate credentials
	if(empty($email_err) && empty($password_err)){
		$sql = "SELECT email, password, accountid, verification FROM account WHERE email = ?";
		
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "s", $email);
			
		
			
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				
				// Store result
				mysqli_stmt_store_result($stmt);
				
				// Check if username exists, if yes then verify password
				if(mysqli_stmt_num_rows($stmt) == 1){   
				
				// Bind result variables
					mysqli_stmt_bind_result($stmt, $email, $hashed_password, $id, $verification);
					
					if(mysqli_stmt_fetch($stmt)){
						if(password_verify($password, $hashed_password)){
							if($verification ==1){
							
								/* Password is correct, so start a new session and save the username to the session */
								session_start();
								$_SESSION['email'] = $email;
								$_SESSION['id'] = $id;
								$time = time();
								$insert_log_time = "REPLACE INTO userlog (id, logintime) VALUES ('$id',NOW())";
							
								if (mysqli_query($link, $insert_log_time)) {
									header("location: blog.php");
								} else{
									echo "SQL Error ";
									echo mysqli_error($link);
								}
							}else{
								$verification_err = 'Please verify email';
							}
						} else{
							$password_err = "<br><b>The password you entered was not valid. $password, $hashed_password, $email</b>";
						}
					}else {
						echo "error with DB";
					}
				} else{
					$email_err = '<br><b>No account found with that email.</b>';
				}
			} else{
				echo "Oops! Something went wrong. Please try again later.";
			}
		}
		mysqli_stmt_close($stmt);
	}
	mysqli_close($link);
}
?>
<!DOCTYPE HTML>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Pet Net</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
	
		<!-- <link rel="stylesheet" type="text/css" href="assets/css/normalize.css"> -->
		
		<!-- Stylesheets -->
		
		<link href="styles.css" rel="stylesheet" type="text/css" media="all" />
		<!--<link href="css/style.css" rel='stylesheet' type='text/css' /> -->
		<link rel="stylesheet" href="css/basic.css" type="text/css" media="all" /> 
		<link href="css/styleNew.css" rel='stylesheet' type='text/css' />
		
		
		
		<!-- <link href="assets/css/info.css" rel="stylesheet" type="text/css" media="all"> -->
		
		

		<!--[if lt IE 9]>
			<script src="assets/components/html5shiv/html5shiv.min.js"></script>
		<![endif]-->

	</head>

	<body>
	
		<!-- <img class = "logo" src = "petnet.gif" alt="PetNet"> -->
		
		<nav class = "nav1"> </nav>
		<nav class = "nav2"> </nav>

		
		<main>
			<article>
				<h1>Welcome to</h1>
				<img class = "bigLogo" src = "petnet.gif">
				<h1>An Online Community of Pet Lovers Worldwide</h1>
			</article><!-- 
			 -->
			 <aside>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
						<label>Email:<sup>*</sup></label>
						<input type="text" name="email"class="form-control" value="<?php echo $email; ?>">
						<span class="help-block"><?php echo $email_err; ?></span>
					</div>    
					<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
						<label>Password:<sup>*</sup></label>
						<input type="password" name="password" class="form-control">
						<span class="help-block"><?php echo $password_err; ?></span>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Submit">
					</div>
				</form>
				<br><br>
				<div class = "row">
					<div class="col-sm-12 text-center">
						<div>
							<!--<form class="form-inline" action="web/blog.html">
								<div class="form-group">
									<label for="email"><h3>Email address:</h3></label>
									<input type="email" class="form-control" id ="email">
								</div>
								<div class="form-group">
									<label for="pwd"><h3>Password:</h3></label>
									<input type="password" class="form-control" id ="pwd">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							</form> -->
							
							<h4>Dont have an account yet? Create one now!</h4>
							
							<form class="form-inline" action="regular.php">
								<button type="submit" class="btn btn-default">Sign Up as a Regular User</button>
							</form>
							
							<form class="form-inline" action="business.php">
								<button type="submit" class="btn btn-default">Sign Up as a Business</button>
							</form>
						</div>
					</div>
				</div>
			</aside>
		</main>	
	

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
			<p>Copyright &copy 2018 PetNet. All rights reserved.</p>
		</footer> -->
		
	</body>
</html>
	
