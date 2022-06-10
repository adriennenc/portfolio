<?php
require_once 'config.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('file_uploads', 'On');
session_start();

$accountid = $_SESSION["id"];
$target_dir = "uploads/";


$target_file_name =  basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $target_file_name;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 900000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. Click <a href='profile.php'>here</a> to go back to your profile";
        $update_sql = "UPDATE account SET image=? WHERE accountid=? ";
       	
$update_stmt = mysqli_prepare($link, $update_sql);
if(!mysqli_stmt_bind_param($update_stmt, "ss", $target_file_name , $accountid)){	
 echo "error bind_param";
 echo mysqli_error($link);
}
if(!mysqli_stmt_execute($update_stmt)){
 echo "error stmt_execute";
 echo mysqli_error($link);
}
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>
