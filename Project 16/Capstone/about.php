<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
	   
	   <li class='active'><a href='about.php'><span>About</span></a></li>
	   <li><a href=phpBB/><span>Forum</span></a></li>
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
		   <center><div class="about_banner_img"><img src="images/banner2.jpg" class="img-responsive" alt=""/></div></center>
			 <div class="about_banner_wrap">
				<h1 class="m_11">About PetNet</h1>
			</div>
			<div class="border"> </div> 
				<div class="container">
					<div class="classes_wrapper">
						<div class="row single-top">
							<div class="col-md-12">
								<div class="blog_single_grid">
									<ul class="links_blog"></ul>
									<div class="clear"></div>
								</div>


	<!--这里开始介绍about petnet-->
	<div class="mission">
	  <h1><center>Our Mission Statement</center></h1>
	  <h5><center>PetNet focuses on helping people connect with other people who have pets, or who are looking for pets. Our focus is making it so that pet owners can find places near them - like grocery stores - or meet other pet owners, businesses to help get their word out, and non-pet owners to help connect and ask questions to pet owners</center></h5>
	  <!-- <h5>PetNet works through....</h5> -->
	</div>





	<div class="member">

	  <h2>Our Team</h2>
	  <div class="col-md-4">
			 <div class="box1">
				<a href="#member1" data-toggle="modal"><img src="images/adri.jpg" class="img-responsive" alt="" height="200" width="200"/></a>             
				<div class="desc1">
						   <a href="#member1" data-toggle="modal"><h3>Adrienne Chaney<br></h3></a>
						  <div class="clear"></div>
			   </div>
			</div>
					</div>
			
					
				   
					
			<div class="col-md-4">
			  <div class="box2">
				<a href="#member2" data-toggle="modal">
						  <img src="images/sjones.jpg" class="img-responsive" alt=""/>  
						  </a>            
				<div class="desc2">
				<a href="#member2" data-toggle="modal"><h3>Stephen Jones</h3></a>
				<div class="clear"></div>
			   </div>
						<div class="clear"></div>
			  </div>
			</div>
					 
									 
					 <div class="col-md-4">
			  <div class="box1">
				<a href="#member3" data-toggle="modal">
						  <img src="images/benk.jpg" class="img-responsive" alt=""/>  
						  </a>            
				<div class="desc1">
				
							<a href="#member3" data-toggle="modal"><h3>Ben Kottwitz</h3></a>
							
				<div class="clear"></div>
			   </div>
						<div class="clear"></div>
			  </div>
			</div>
					</div>
					<div class="row about_box">
										  <div class="col-md-4">
								  <div class="box2">
				<a href="#member4" data-toggle="modal">
						  <img src="images/amber.jpg" class="img-responsive" alt=""/> 
						  </a>            
				<div class="desc2">
				<a href="#member4" data-toggle="modal"><h3>Ke Xu</h3></a>
				<div class="clear"></div>
			   </div>
						<div class="clear"></div>
			  </div>
						</div>
						<div class="col-md-4">
								  <div class="box1">
				<a href="#member5" data-toggle="modal">
						  <img src="images/cao.jpg" class="img-responsive" alt=""/>    
						  </a>          
				<div class="desc1">
						  <a href="#member5" data-toggle="modal">
				<h3>Zhengrong Cao</h3>
							</a>
				<div class="clear"></div>
			   </div>
						<div class="clear"></div>
			  </div>
					  
						</div>
					<div class="col-md-4">
					<br>
						<img src="images/images/logo.jpg" class="img-responsive" alt=""/></div>
					
					</div>


	</div>


	<!-- bottom_banner -->



	 
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
						<p class="address">Website ： <a class="address" href="http://cgi.soic.indiana.edu/~team44/login.php"> Our Website</a></p> 
						<br/>
						<h4 class="m_7"><a class="sponsor_list" href=""> </h4>
					
					</div>
					
					<div class="col-md-4">
					<div class="f-logo">
				<!--<img src="images/Head-logo-Light.png" height="80px" alt=""/>-->
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
	  

	  
	   <!-- modal windows -->
			<div id="member1" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
							<h3 class="modal-title">Member 1</h3>
						</div>
						<div class="modal-body">
							<img src="images/member/m1.jpg" alt="springgala" class="img-responsive"/>
							<center><p>This is XXX</p></center>
							<!--<img src="images/Department/activityMember.jpg" alt="springgala" class="img-responsive"/>-->
							<p>Put member intro here</p>
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			
		 <div id="member2" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
							<h3 class="modal-title">Member 2</h3>
						</div>
						<div class="modal-body">
						<!--<img src="images/Department/mediadepartment.jpg" alt="springgala" class="img-responsive"/>-->
							<center><p>This is member 2</p></center>
							<!--<img src="images/Department/mediaMember.jpg" alt="springgala" class="img-responsive"/>-->
						<p>Blablabla</p>
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		   
			<div id="member3" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
							<h3 class="modal-title">Member 3</h3>
						</div>
						<div class="modal-body">    
							<!--<img src="images/Department/financedepartment.jpg" alt="springgala" class="img-responsive"/>-->
							<center><p>This is XXX</p></center>
							<!--<img src="images/Department/financeMember.jpg" alt="springgala" class="img-responsive"/>-->
						   <p>Intro here</p>
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			
			<div id="member4" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
							<h3 class="modal-title">Member 4</h3>
						</div>
						<div class="modal-body">
							<!--<img src="images/Department/itdepartment.jpg" alt="springgala" class="img-responsive"/>-->
							<center><p>This is XXX</p></center>
							<!--<img src="images/Department/itMember.jpg" alt="springgala" class="img-responsive"/>-->
							<p>Intro</p>
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			
		   <div id="member5" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
							<h3 class="modal-title">Member 5</h3>
						</div>
						<div class="modal-body">
							<!--<img src="images/Department/cdadepartment.jpg" alt="springgala" class="img-responsive"/>-->
							<center><p>Member 5</p></center>
							<!--<img src="images/Department/cdaMember.jpg" alt="springgala" class="img-responsive"/>-->
							<p>Intro</p>
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-----model end--->   


	<!--      
	 <script>        
	function changeImage3() {
	 var image = document.getElementById("myImage3");
		if (image.src.match("images/CPAO.jpg")) {
			image.src = "images/2014meeting1.jpg";	
		} else if (image.src.match("images/2014meeting1.jpg")){
			image.src = "images/2014meeting2.jpg";
	   } else if (image.src.match("images/2014meeting2.jpg")){
		   image.src = "images/2014meeting3.jpg";
	   } else if (image.src.match("images/2014meeting3.jpg")){
		   image.src = "images/2014meeting5.jpg";
	} else {
			image.src = "images/CPAO.jpg";
	}}
	</script>-->
	</body>
</html>