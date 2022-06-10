<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  header("location: ../login.php");
  exit;
}
?>
<!DOCTYPE HTML>
<html>

<head>
<title>Team 44</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="../styles.css" rel='stylesheet' type='text/css' />
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
	<div class="header-bottom">
		<div class="container">
		<div class="header-bottom_left">
	</div>

		<div class="social">  
		<ul>  
			  
	  
			  <!--Search bar-->
			  <input type="text" placeholder="Search...">
			  <!--<button type="submit"></button>-->


			  <li class="facebook"><a href="https://www.facebook.com/groups/4711490235/"><span> </span></a></li>
			  <li class="instagram"><a href="https://www.instagram.com/spcamc/"><span> </span></a></li>  
			  
				
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
	   <li><a href=phpBB/><span>Forum</span></a></li>
	   <li class='active'><a href='map.php'><span>Map</span></a></li>
	  
	</ul>
	</div>
        
		  </div>
          <!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
  </div>
    <!-- end menu -->
		
		
			<center><h1><strong>Welcome, <?php echo $_SESSION['email']; ?>!</strong></h1></center>
<center>
<form>
		<input type="button" value="Click Here to Log Out" onclick="window.location.href='logout.php'" />
</form>
<form>
	<input type="button" value="Profile" onclick="window.location.href='profile.php'" />
</form>
</center>
	


<div class="main">
       <center><div class="about_banner_img"><img src="images/banner2.jpg" class="img-responsive" alt=""></div></center>
		 <div class="about_banner_wrap">
      	    <h1 class="m_11">Map</h1>
      	</div>
		
		
		<!-- <!-- bottom_banner -->


<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
  <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkLOULSR2k8dcUE1N0emRIJG6S1Z7cGH4&callback=initMap" async defer></script>-->
</head> 
<body>

	<center><h2 class="map1">Food and Supply Stores:</h2></center>
	<center><div id="map1" style="width: 800px; height: 500px;" class="map1"></div></center>
	
	<center><h2 class="map1">Dog Parks:</h2></center>
	<center><div id="map2" style="width: 800px; height: 500px;" class="map1"></div></center>
	
	<center><h2 class="map1">Veterinarians:</h2></center>
	<center><div id="map3" style="width: 800px; height: 500px;" class="map1"></div></center>

  <script type="text/javascript">
    var locations = [
      ['PetSmart<br>\ 240 N Gates Dr, Bloomington, IN 47404<br>\Hours: 9AM to 9PM<br>\ <a target="_blank" = always new tab href = "https://goo.gl/maps/2zXihteqP1T2">Click Here to Get Directions and Information</a>', 39.1677, -86.5752],
      ['Petco Animal Supplies<br>\ 2520 E 3rd St, Bloomington, IN 47401<br>\Hours: 9AM to 9PM<br>\ <a target="_blank" = always new tab href = "https://goo.gl/maps/W2CCUuPjtiS2">Click Here to Get Directions and Information</a>', 39.1627, -86.5016],
      ['Delilahs Pet Shop<br>\ 650 N College Ave, Bloomington, IN 47404<br>\Hours: 9AM to 6PM<br>\ <a target="_blank" = always new tab href = "https://goo.gl/maps/RdJn33pTRrv">Click Here to Get Directions and Information</a>', 39.1730, -86.5343],
      ['T&T Pet Food and Supply<br>\ 2375 S Walnut St, Bloomington, IN 47401<br>\Hours: 9:30AM to 6:30PM<br>\ <a target="_blank" = always new tab href = "https://goo.gl/maps/aAUfCxgZbHM2">Click Here to Get Directions and Information</a>', 39.1395, -86.5303],
      ['Rural King<br>\ 3201 IN-45, Bloomington, IN 47403<br>\Hours: 7AM to 9PM<br>\ <a target="_blank" = always new tab href = "https://goo.gl/maps/eWLeWpiiCgP2">Click Here to Get Directions and Information</a>', 39.1425, -86.5750]
    ];

    var map = new google.maps.Map(document.getElementById('map1'), {
      zoom: 13,
      center: new google.maps.LatLng(39.1653, -86.5264),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
    <script type="text/javascript">
    var locations1 = [
      ['Ferguson Dog Park<br>\ 4300 N Stone Mill Rd, Bloomington, IN 47408<br>\Hours: Open All Day<br>\ <a target="_blank" = always new tab href = "https://goo.gl/maps/PgEJMGtcmzn">Click Here to Get Directions and Information</a>', 39.209755, -86.531384],
      ['Karst Farm Park<br>\ 2450 S Endwright Rd, Bloomington, IN 47403<br>\Hours: 8AM to 9PM<br>\ <a target="_blank" = always new tab href = "https://goo.gl/maps/AuksJMxnxmD2">Click Here to Get Directions and Information</a>', 39.139536, -86.598739],
      ['Monroe County Parks & Recreation<br>\ 5200 W Airport Rd, Bloomington, IN 47403<br>\Hours: N/A<br>\ <a target="_blank" = always new tab href = "https://goo.gl/maps/ymu2ZkAi6Z52">Click Here to Get Directions and Information</a>', 39.136994, -86.599183],
      ['Will Detmer Park<br>\ 4140 W Vernal Pike, Bloomington, IN 47404<br>\Hours: N/A<br>\ <a target="_blank" = always new tab href = "https://goo.gl/maps/5nJZEdx4ZEq">Click Here to Get Directions and Information</a>', 39.180151, -86.579789]
    ];

    var map = new google.maps.Map(document.getElementById('map2'), {
      zoom: 12,
      center: new google.maps.LatLng(39.173571, -86.571899),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow1 = new google.maps.InfoWindow();

    var marker1, j;

    for (j = 0; j < locations1.length; j++) {  
      marker1 = new google.maps.Marker({
        position: new google.maps.LatLng(locations1[j][1], locations1[j][2]),
        map: map
      });

      google.maps.event.addListener(marker1, 'click', (function(marker1, j) {
        return function() {
          infowindow1.setContent(locations1[j][0]);
          infowindow1.open(map, marker1);
        }
      })(marker1, j));
    }
  </script>
    <script type="text/javascript">
    var locations2 = [
      ['Anothonys Pets<br>\ 2990 E 3rd St, Bloomington, IN 47401<br>\Hours: 10AM to 9PM<br>\ <a target="_blank" = always new tab href = "https://goo.gl/maps/oQrtYLAWC7U2">Click Here to Get Directions and Information</a>', 39.161700, -86.495609],
      ['Furry Friends Veterinary Hospital<br>\ 857 S Auto Mall Rd, Bloomington, IN 47401<br>\Hours Vary Day by Day<br>\ <a target="_blank" = always new tab href = "https://goo.gl/maps/wTdfAZqd9P42">Click Here to Get Directions and Information</a>', 39.156165, -86.495467],
      ['Bloomington Veterinary Hospital<br>\ 115 N Smith Rd, Bloomington, IN 47408<br>\Hours Vary Day by Day<br>\ <a target="_blank" = always new tab href = "https://goo.gl/maps/B9vqZmMABAn">Click Here to Get Directions and Information</a>', 39.167422, -86.481835],
      ['Combs Veterinary Clinic<br>\ 6349 IN-45, Bloomington, IN 47403<br>\Hours Vary by Day<br>\ <a target="_blank" = always new tab href = "https://goo.gl/maps/uikaDN3LVrr">Click Here to Get Directions and Information</a>', 39.121729, -86.614230]
    ];

    var map = new google.maps.Map(document.getElementById('map3'), {
      zoom: 12,
      center: new google.maps.LatLng(39.1653, -86.5264),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow2 = new google.maps.InfoWindow();

    var marker2, k;

    for (k = 0; k < locations2.length; k++) {  
      marker2 = new google.maps.Marker({
        position: new google.maps.LatLng(locations2[k][1], locations[k][2]),
        map: map
      });

      google.maps.event.addListener(marker2, 'click', (function(marker2, k) {
        return function() {
          infowindow2.setContent(locations2[k][0]);
          infowindow2.open(map, marker2);
        }
      })(marker2, k));
    }
  </script>
</body>
</html>
	 
		 </div>
		  </div>
		  
			<div class="clear"></div>
		   </div>
		</div>
		
			<div class="clear"></div>
			
			  
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
	  


							

