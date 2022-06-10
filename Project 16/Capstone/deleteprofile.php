<?php
require_once 'config.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

$id = $_SESSION["id"];
$sql = "DELETE FROM account WHERE accountid = ?"; 
$stmt = mysqli_prepare($link, $sql);
if(!mysqli_stmt_bind_param($stmt, "s", $id)){
 echo "error bind_param";
}
if(!mysqli_stmt_execute($stmt)){
 echo "error stmt_execute";
 echo("Error description: " . mysqli_error($link));

}
header("location: login.php");
exit();

?>

