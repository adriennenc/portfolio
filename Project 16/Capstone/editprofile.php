<?php
require_once 'config.php';
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

session_start();
$accountid = $_SESSION["id"];
$updated_street = $_POST["street"];
$updated_city = $_POST["city"];
$updated_state = $_POST["state"];
$updated_zip = $_POST["zip"];
$updated_phone = $_POST["phone"];
$updated_fname = $_POST["fname"];
$updated_lname = $_POST["lname"];


if ($_SERVER['REQUEST_METHOD'] === 'GET') {

$sql = "SELECT accountid, street, city, state, zip, phone, fname, lname FROM account WHERE accountid =?";

$stmt = mysqli_prepare($link, $sql);
if(!mysqli_stmt_bind_param($stmt, "s", $accountid)){
 echo "error bind_param";
}
if(!mysqli_stmt_execute($stmt)){
 echo "error stmt_execute";
}
if(!mysqli_stmt_bind_result($stmt, $accountid, $street, $city, $state, $zip, $phone, $fname, $lname)){
 echo "error bind_result";
}
if(!mysqli_stmt_fetch($stmt)){
 echo "error fetch";
 echo mysqli_stmt_error($stmt);
}


}else {
	$update_sql = "UPDATE account SET street=?, city= ?, state= ?, zip= ?, phone= ?, fname= ?, lname= ? WHERE accountid=? ";
	
	$update_stmt = mysqli_prepare($link, $update_sql);
if(!mysqli_stmt_bind_param($update_stmt, "ssssssss", $updated_street, $updated_city, $updated_state, $updated_zip, $updated_phone, $updated_fname, $updated_lname, $accountid)){
	
 echo "error bind_param";
echo mysqli_error($link);
}
if(!mysqli_stmt_execute($update_stmt)){
 echo "error stmt_execute";
 echo mysqli_error($link);

}
header("location: profile.php");
exit();
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM account WHERE accountid=?");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: login.php');
}







echo "<h1> Edit Profile </h1>

<form name='editprofile' action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>
<label>Street</label><input type='text' name='street' value='". $street ."'>
<label>City</label><input type='text' name='city' value='". $city ."'>
<label>State</label><input type='text' name='state' value='". $state ."'>
<label>Zip</label><input type='text' name='zip' value='". $zip ."'>
<label>Phone</label><input type='text' name='phone' value='". $phone ."'>
<label>First Name</label><input type='text' name='fname' value='". $fname ."'>
<label>Last Name</label><input type='text' name='lname' value='". $lname ."'>
<input type='submit' class='btn btn-primary' value='Submit'>
</form>";

?>


