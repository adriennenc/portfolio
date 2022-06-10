<?php
require_once 'config.php';
if(isset($_GET['id']) && !empty($_GET['id']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $id = mysql_escape_string($_GET['id']); // Set email variable
    $hash = mysql_escape_string($_GET['hash']); // Set hash variable

	$sql = "SELECT * FROM verify WHERE email ='".$id."' and password ='".$hash."'";
	
	// $stmt = mysqli_prepare($link, $sql);
	// mysqli_stmt_bind_param($stmt, "ss", $id,$hash); 

	// echo $sql;
	// echo mysqli_connect_error();
	// echo $stmt;
	// echo mysqli_stmt_error($stmt);
	
	// $search = mysqli_stmt_execute($stmt);
	if($search = mysqli_query($link,$sql)){
		$match  = mysqli_num_rows($search);
		
	}
	
	if($match > 0){
		$sql2="UPDATE account SET verification=1 WHERE email='".$id."'";
		mysqli_query($link,$sql2);
		echo '<div class="statusmsg">Your account has been activated! <a href="http://cgi.soic.indiana.edu/~team44/login.php">Click here to login</a></div>';	
		// We have a match, activate the account	
		
	}else{
		// No match -> invalid url or account has already been activated.
		echo '<div class="statusmsg">RIP, didnt work. (debug msg)</div>';
	}

	
}

	
	
?>