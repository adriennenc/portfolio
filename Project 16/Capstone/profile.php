<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php


require_once 'config.php';
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
session_start();
$accountid = $_SESSION["id"];
$street = $_POST["street"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$password = $_POST["password"];
$petid = $_POST["petid"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$species = $_POST["species"];
$breed = $_POST["breed"];
$dob = $_POST["dob"];
$adopt = $_POST["adoptable"];


//$conn->close();
// Initialize the session
//session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  header("location: login.php");
  exit;
}


if(!empty($_GET['accountid'])){
    //DB details
    $dbHost     = 'localhost';
    $dbEmail = 'root';
    $dbPassword = '*****';
    $dbName     = 'account';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbEmail, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $result = $db->query("SELECT image FROM account WHERE accountid = {$_GET['accountid']}");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/gif"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }
}
$sql1 = "SELECT accountid, street, city, state, zip, phone, email, fname, lname,image FROM account WHERE accountid =?";



//SQL1

$stmt = mysqli_prepare($link, $sql1);
if(!mysqli_stmt_bind_param($stmt, "s", $accountid)){
 echo "error bind_param";
}
if(!mysqli_stmt_execute($stmt)){
 echo "error stmt_execute";
}
if(!mysqli_stmt_bind_result($stmt, $accountid, $street, $city, $state, $zip, $phone, $email, $fname, $lname, $image)){
 echo "error bind_result";
}
if(!mysqli_stmt_fetch($stmt)){
 echo "error fetch";
 echo mysqli_stmt_error($stmt);
}
   mysqli_stmt_close($stmt);

//SQL2
$sql2 = "SELECT petid, name, gender, species, breed, dob, adoptable, images FROM pet WHERE accountid= ?";

$stmt2 = mysqli_prepare($link, $sql2);
if(!mysqli_stmt_bind_param($stmt2, "s", $accountid)){
 echo "error bind_param1";
}
if(!mysqli_stmt_execute($stmt2)){
 echo "error stmt_execute1";
}


 $result = mysqli_stmt_get_result($stmt2);
 echo mysqli_stmt_error($stmt2);
 
 //TESTING
 
 

    



?>
<!DOCTYPE HTML>
<html>


</center>
<head>
<title>Team 44</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="styles.css" rel='stylesheet' type='text/css' />
<link href="info.css" rel='stylesheet' type='text/css' />
<link href="normalize.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>



<!--<link href="css/style2.css" rel="stylesheet" type="text/css">-->
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
<!--<script src="js/jquery.min.js"></script>
<script src="form/bootstrap1.min.js"></script>-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<!--<script src="js/bootstrap.min.js"></script>-->
<!-- //grid-slider -->
<!---calender-style---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style2.css" rel="stylesheet" type="text/css">
<!--<link href="css/default.css" rel="stylesheet" type="text/css">-->
<!--<link href="css/normalize.css" rel="stylesheet" type="text/css">-->

<!--把这行删掉顶上就不会留白-->
<!--<link href="css/main.css" rel="stylesheet" type="text/css">-->

<!---//calender-style---->	

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap1.min.js"></script>
  
<!--<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin:auto;
  }
</style>-->


</head>
<body>

<!DOCTYPE HTML>
<html>

<head>
<title>Team 44</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="../styles.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>



<!--<link href="css/style2.css" rel="stylesheet" type="text/css">-->
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
<!--<script src="js/jquery.min.js"></script>
<script src="form/bootstrap1.min.js"></script>-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<!--<script src="js/bootstrap.min.js"></script>-->
<!-- //grid-slider -->
<!---calender-style---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style2.css" rel="stylesheet" type="text/css">
<!--<link href="css/default.css" rel="stylesheet" type="text/css">-->
<!--<link href="css/normalize.css" rel="stylesheet" type="text/css">-->

<!--把这行删掉顶上就不会留白-->
<!--<link href="css/main.css" rel="stylesheet" type="text/css">-->

<!---//calender-style---->	

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap1.min.js"></script>
  
<!--<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin:auto;
  }
</style>-->

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>
	
	<!-- <nav role="navigation" id="nav">
			<div class="info">
				<input class="trigger" type="checkbox" id="mainNavButton">
				<label for="mainNavButton" onclick>Adrienne Chaney</label>
				<ul>
					<li><a href="index.html">About</a>
						
					</li>
					<li><a href="contact.html" class="active">Contact Information</a></li>
					<li><a href="projects.html">My Projects</a></li>
					<li><a href="resume.html">My Resume</a></li>
				</ul> 
			</div>
		</nav> -->
		
		
		<div class="header-bottom">
		<div class="container">
		<div class="header-bottom_left">
	</div>
		
		<div class="social">  
	
		<ul>  
			  
	  
			  <!--Search bar-->
			  <input type="text" placeholder="Search...">
			  <!--<button type="submit"></button>-->


			  <li class="facebook"><a href="https://www.facebook.com/IUCSSA"><span> </span></a></li>
			  <li class="instagram"><a href="http://instagram.com/iucssahoosier"><span> </span></a></li>  
			  
				
		 </ul>
		   </div>
		   <div class="clear"></div>
		</div>
		
		
		<!-- end header_bottom -->
		
		
		<!-- start menu -->
		<div class="menu" id="menu">
		<img class="logo" src="images/petnet.gif"  alt="PetNet"/>
		<div class="container">
			 
	
		 <!---<div class="logo">
				<a href="index.html"><img src="images/Head-logo-Light.png" height="58px" alt=""/></a>
			 </div>---->


 <div class="h_menu4">
         <!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
					   <div id='cssmenu'>
<ul>
 
	 <li><a href='community.php'><span>Community</span></a></li>
	   
		<!-- <ul>
			<!---Dogs-->
			<!-- <li class='has-sub'><a href='dogs.html'><span>Dogs</span></a> 
			<!---这里放狗狗分类---->
			<!-- <ul>
			<li><a href='#'><span>Breed1</span></a></li>
			<li ><a href='#'><span>Breed2</span></a></li>
			</ul>
			</li> -->

			   
			<!---Cats-->
			<!-- <li class='has-sub'><a href='cats.html'><span>Cats</span></a> -->
			<!---这里放猫猫分类---->
			<!-- <ul>
			<li><a href='#'><span>Breed1</span></a></li>
			<li ><a href='#'><span>Breed2</span></a></li>
			</ul>
			</li> -->


			<!---Ferrets-->
			<!-- <li class='has-sub'><a href='ferrets.html'><span>Ferrets</span></a> -->
			<!---这里放分类---->
			<!-- <ul>
			<li><a href='#'><span>Breed1</span></a></li>
			<li ><a href='#'><span>Breed2</span></a></li>
			</ul>
			</li> -->


			<!---Others-->
			<!-- <li class='has-sub'><a href='#'><span>Others</span></a> -->
			<!---这里放分类---->
			<!-- <ul>
			<li><a href='#'><span>Breed1</span></a></li>
			<li ><a href='#'><span>Breed2</span></a></li>
			</ul>
			</li> -->

		<!-- </ul> -->

	   
	   </li>

	   <li><a href='blog.php'><span>Blogs</span></a></li>
	   <!--如果要让正在显示的页面title变成白色（选中模式），class＝‘active’-->
	   
	   <li><a href='about.php'><span>About</span></a></li>
	   <li><a href='map.php'><span>Map</span></a></li>
	  
	</ul>
	</div>
        
		  </div>
          <!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
  </div>
    <!-- end menu -->
	
		
						<!--Search bar-->
					<!--<input type="text" placeholder="Search...">
					<!--<button type="submit"></button>-->


					<!--<li class="facebook"><a href="https://www.facebook.com/IUCSSA"><span> </span></a></li>
					<li class="instagram"><a href="http://instagram.com/iucssahoosier"><span>  </span></a></li> -->
				
		<!-- end menu -->

		<br><br>
		<article class="human">
<center><h1><strong><?php  echo "$fname"; ?> <?php  echo "$lname"; ?></strong></h1>
<button id="myBtn">View/ Edit My Information</button>
<form>
	<input type="button" value="Click Here to Log Out" onclick="window.location.href='logout.php'" />
</form>
<form>
	<input type="button" value="Profile" onclick="window.location.href='profile.php'" />
</form>
	
<!--<form>
	<input type="button" value="Edit Profile" onclick="window.location.href='editprofile.php'" />
</form> -->
<form>
	<input type="button" value="Delete Profile" onclick="window.location.href='deleteprofile.php'" /> 
	
</form>
<form>
	<input type="button" value="Add a Pet" onclick="window.location.href='addpet.html'" /> 
</form>

<center>
<br>
	


<!--echo "<table><tr><th>accountid</th><th>street</th><th>city</th><th>state</th><th>zip</th><th>phone</th><th>email</th><th>fname</th><th>lname</th></tr><tr>"; -->



<?php echo " <img style='float: center' src=\"http://cgi.soic.indiana.edu/~team44/uploads/$image\" height='250' width='225'>"; ?> 
<br>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</article><!--
--><article class="human">

<!--<php echo "<td>$accountid</td><td>$street</td><td>$city</td><td>$state</td><td>$zip</td><td>$phone</td><td>$email</td><td>$fname</td><td>$lname</td>"; ?></aside>
  

<php echo "</tr></table>"; ?> -->

<!-- Trigger/Open The Modal -->


<?php
echo "<table><tr><th>petid</th><th>name</th><th>gender</th><th>species</th><th>breed</th><th>dob</th><th>adoptable</th></tr><tr>";

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC ))
        {
            echo "<tr><td>".$row['petid']."</td><td>".$row['name']."</td><td>".$row['gender']."</td><td>".$row['species']."</td><td>".$row['breed']."</td><td>".$row['dob']."</td><td>".$row['adoptable']."</td><td><img src=\"http://cgi.soic.indiana.edu/~team44/uploads/".$row['images']."\" height=\"42\" width=\"42\"> </td></tr>"; 
			
        }

echo "</tr></table>"; 

?>

<?php

$display = mysqli_query($connection, "SELECT 'images' FROM pet");
$displayImage = mysqli_fetch_assoc($display);

echo $displayImage['images'];


?>

</article>


        <div class="footer-bottom">
       <div class="container">
       <div class="row section group">
        <div class="col-md-4">
      <h4 class="m_7">2017-2018 Capstone</h4>
           
                 
                   
          
        <p class="address"><strong>Team 44</strong></p>
                 <p class="address">Address : 
            <small>919 E 10th St, Bloomington, IN 47408</small> </p>
          <p class="address">Tel : &nbsp;&nbsp;
                    (812) 856-5754&nbsp;; &nbsp;
                    </p>
                    <p class="address">Website ： <a class="address" href="http://cgi.soic.indiana.edu/~team44/login.php">Our Website</a></p> 
                    <br/>
                    
                
                </div>
                
                <div class="col-md-4">
                <div class="f-logo">
            
          </div>
                </div>
                
                
        <div class="col-md-4">
                <center><h4 class="m_7">Animal Organizations</h4></center>
          <ul class="list">
            
            <li><a href="http://www.bornfree.org.uk/campaigns/care-for-the-wild/">CWI</a></li>
                      <li><a href="https://www.ifaw.org/international">IFAW</a></li>
            <li><a href="https://wildaid.org">Wild Aid</a></li>
                        <li><a href="www.wcs.org">WCS</a></li>
            
          </ul>
          <ul class="list1">
            
            <li><a href="www.bornfree.org.uk">BFF</a></li>
                        <li><a href="www.animalsasia.org">AAF</a></li>
                        <li><a href="www.ivu.org">IVU</a></li>
                       <li><a href="https://www.worldanimalprotection.org">WFPA</a></li>
                        
                        
            
          </ul>
        </div>
        <div class="clear"></div>
          </div>
      </div>
     </div>

     <div class="copyright">
      <div class="container">
        <!--left part-->
        <div class="col-md-4"></div>
        <!--middle part-->
        <div class="col-md-4"><div class="f-logo" color="white"><div class="copy">
            <p>Copyright © 2018 PetNet. All rights reserved.</p></div>
        </div>
        </div>
        <div class="social">  
          <ul>  
          <li class="facebook"><a href="https://www.facebook.com/groups/4711490235/"><span> </span></a></li>
          <li class="instagram"><a href="https://www.instagram.com/spcamc/"><span> </span></a></li>   
            
         </ul>
        </div>
       <div class="clear"></div>
      </div>
       </div>




















<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	
	
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

// $sql = "SELECT accountid, street, city, state, zip, phone, fname, lname FROM account WHERE accountid =?";

// $stmt = mysqli_prepare($link, $sql);
// if(!mysqli_stmt_bind_param($stmt, "s", $accountid)){
 // echo "error bind_param";
// }
// if(!mysqli_stmt_execute($stmt)){
 // echo "error stmt_execute";
// }
// if(!mysqli_stmt_bind_result($stmt, $accountid, $street, $city, $state, $zip, $phone, $fname, $lname)){
 // echo "error bind_result";
// }
// if(!mysqli_stmt_fetch($stmt)){
 // echo "error fetch";
 // echo mysqli_stmt_error($stmt);
// }


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







echo '<h1> Edit Profile </h1>

<form name="editprofile" action="/~team44/editprofile.php" method="post"><br>
<label>Street</label><input type="text" name="street" value="'. $street .'"><br>
<label>City</label><input type="text" name="city" value="'. $city .'"><br>
<label>State</label><input type="text" name="state" value="'. $state .'"><br>
<label>Zip</label><input type="text" name="zip" value="'. $zip .'"><br>
<label>Phone</label><input type="text" name="phone" value="'. $phone .'"><br>
<label>First Name</label><input type=text name="fname" value="'. $fname .'"><br>
<label>Last Name</label><input type=text name="lname" value="'. $lname .'"><br>
<input type="submit" class="btn btn-primary" value="Submit">
<button type="cancel" class="btn btn-primary" onclick="window.location.href="profile.php""; return false;">Cancel</button>
</form>';



?>



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
		
	
		

	</body>  

</html>
	            




