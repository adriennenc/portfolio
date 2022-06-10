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
<!--<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />--->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- //grid-slider -->
<!---calender-style---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style2.css" rel="stylesheet" type="text/css">
<link href="css/default.css" rel="stylesheet" type="text/css">
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">

<!---//calender-style---->	

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap1.min.js"></script>
<!-- Extra -->
<link href="styles.css" rel='stylesheet' type='text/css' />
<link href="info.css" rel='stylesheet' type='text/css' />
<link href="normalize.css" rel='stylesheet' type='text/css' />
  




</head>
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
 
   <!--li><a href='home.html'><span>Home</span></a></li-->
   <li class='active'><a href='community.html'><span>Community</span></a>
   
   
   
   </li>





   

   <li><a href='blog.php'><span>Blogs</span></a></li>
   <!--如果要让正在显示的页面title变成白色（选中模式），class＝‘active’-->
  
   <li><a href='about.php'><span>About</span></a></li>
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
      	    <h1 class="m_11">Community</h1>
      	</div>
		<div class="border"> </div> 
		 <div class="container">
		   <div class="classes_wrapper">
             <div class="row single-top">
		  	   <div class="col-md-12">
		  	     <div class="blog_single_grid">
				  <ul class="links_blog"></ul>


                   
            <!------Circles------>
                   
                    
                <div class="row">



       					<div class="col-sm-6 col-lg-3">
                    <div class="ih-item circle effect13 bottom_to_top"><a href="#numberone" data-toggle="modal">
                           <div class="img"> 
                           
                           <img src="images/dogs/swim.gif" alt="img"></div>
                          
                            	<div class="info">
                            		<div class="info-back">
                             
                            			<h3>Shiro 1</h3>
                            			<p>Intro</p>
              	     				</div>
               					</div>
         				</a>
                        
                        </div>
                        <p></p>
                        <div class="ih-item circle effect13 bottom_to_top"><a href="#numberfive" data-toggle="modal">
                           <div class="img"><img src="images/cats/cat2.jpg" alt="img"></div>
                            	<div class="info">
                            		<div class="info-back">
                            			<h3>Maru 5</h3>
                            			<p>Intro</p>
              	     				</div>
               					</div>
         				</a></div>
                </div>




       					<div class="col-sm-6 col-lg-3">
                        <div class="ih-item circle effect13 bottom_to_top"><a href="#numbertwo" data-toggle="modal">
                           <div class="img"><img src="images/ferrets/ferret1.jpg" alt="img"></div>
                            	<div class="info">
                            		<div class="info-back">
                            			<h3>Liz 2</h3>
                            			<p>Intro</p>
              	     				</div>
               					</div>
         				</a></div>
                        <p></p>
                        <div class="ih-item circle effect13 bottom_to_top"><a href="#numbersix" data-toggle="modal">
                           <div class="img"><img src="images/member/m1.jpg" alt="img"></div>
                            	<div class="info">
                            		<div class="info-back">
                            			<h3>Angel 6</h3>
                            			<p>Intro</p>
              	     				</div>
               					</div>
         				</a></div></div>




       					<div class="col-sm-6 col-lg-3">
                        <div class="ih-item circle effect13 bottom_to_top"><a href="#numberthree" data-toggle="modal">
                           <div class="img"><img src="images/member/m3.png" alt="img"></div>
                            	<div class="info">
                            		<div class="info-back">
                            			<h3>Paco 3</h3>
                            			<p>Intro</p>
              	     				</div>
               					</div>
         				</a></div>
                        <p></p>
                        <div class="ih-item circle effect13 bottom_to_top"><a href="#numberseven" data-toggle="modal">
                           <div class="img"><img src="images/member/m5.jpg" alt="img"></div>
                            	<div class="info">
                            		<div class="info-back">
                            			<h3>Teddy 7</h3>
                            			<p>Intro</p>
              	     				</div>
               					</div>
         				</a></div></div>




        					<div class="col-sm-6 col-lg-3">
                            <div class="ih-item circle effect13 bottom_to_top"><a href="#numberfour" data-toggle="modal">
                           <div class="img"><img src="images/member/m2.jpg" alt="img"></div>
                            	<div class="info">
                            		<div class="info-back">
                            			<h3>Luna 4</h3>
                            			<p>Intro</p>
              	     				</div>
               					</div>
         				</a></div>
                        <p></p>
                        <div class="ih-item circle effect13 bottom_to_top"><a href="#numbereight" data-toggle="modal">
                           <div class="img"><img src="images/member/logo.jpg" alt="img"></div>
                            	<div class="info">
                            		<div class="info-back">
                            			<h3>Snoopy 8</h3>
                            			<p>Intro</p>
              	     				</div>
               					</div>
         				</a></div></div>



                    <div class="col-sm-6 col-lg-3">
                    <div class="ih-item circle effect13 bottom_to_top"><a href="#numberone" data-toggle="modal">
                           <div class="img"><img src="images/member/logo.jpg" alt="img"></div>
                          
                              <div class="info">
                                <div class="info-back">
                             
                                  <h3>9</h3>
                                  <p>Intro</p>
                            </div>
                        </div>
                </a>
                        
                        </div>
                        <p></p>
                        <div class="ih-item circle effect13 bottom_to_top"><a href="#numberfive" data-toggle="modal">
                           <div class="img"><img src="images/member/logo.jpg" alt="img"></div>
                              <div class="info">
                                <div class="info-back">
                                  <h3>13</h3>
                                  <p>Intro</p>
                            </div>
                        </div>
                </a></div>
                </div>


                <div class="col-sm-6 col-lg-3">
                        <div class="ih-item circle effect13 bottom_to_top"><a href="#numbertwo" data-toggle="modal">
                           <div class="img"><img src="images/member/logo.jpg" alt="img"></div>
                              <div class="info">
                                <div class="info-back">
                                  <h3>10</h3>
                                  <p>Intro</p>
                            </div>
                        </div>
                </a></div>
                        <p></p>
                        <div class="ih-item circle effect13 bottom_to_top"><a href="#numbersix" data-toggle="modal">
                           <div class="img"><img src="images/member/logo.jpg" alt="img"></div>
                              <div class="info">
                                <div class="info-back">
                                  <h3>14</h3>
                                  <p>Intro</p>
                            </div>
                        </div>
                </a></div></div>




              <div class="col-sm-6 col-lg-3">
                        <div class="ih-item circle effect13 bottom_to_top"><a href="#numberthree" data-toggle="modal">
                           <div class="img"><img src="images/member/logo.jpg" alt="img"></div>
                              <div class="info">
                                <div class="info-back">
                                  <h3>11</h3>
                                  <p>Intro</p>
                            </div>
                        </div>
                </a></div>
                        <p></p>
                        <div class="ih-item circle effect13 bottom_to_top"><a href="#numberseven" data-toggle="modal">
                           <div class="img"><img src="images/member/logo.jpg" alt="img"></div>
                              <div class="info">
                                <div class="info-back">
                                  <h3>15</h3>
                                  <p>Intro</p>
                            </div>
                        </div>
                </a></div></div>




                <div class="col-sm-6 col-lg-3">
                            <div class="ih-item circle effect13 bottom_to_top"><a href="#numberfour" data-toggle="modal">
                           <div class="img"><img src="images/member/logo.jpg" alt="img"></div>
                              <div class="info">
                                <div class="info-back">
                                  <h3>12</h3>
                                  <p>Intro</p>
                            </div>
                        </div>
                </a></div>
                        <p></p>
                        <div class="ih-item circle effect13 bottom_to_top"><a href="#numbereight" data-toggle="modal">
                           <div class="img"><img src="images/member/logo.jpg" alt="img"></div>
                              <div class="info">
                                <div class="info-back">
                                  <h3>16</h3>
                                  <p>Intro</p>
                            </div>
                        </div>
                </a></div></div>







                           
                        </div>
                        
                        <br>
                        
                                   
				  </ul>		
                    </div>   
              
           </div>
	       <div class="clear"></div>
           <br/>
           <br/>
           <br/>
           <br/>
           
      </div>
           </div>




<!-- bottom_banner -->



 <div class="clear"></div>
         </div>
       </div>
      </div>
      
        <div class="clear"></div>
       </div>
    </div>
    
         <div class="clear"></div>
        
          
        <div class="footer-bottom">
       <div class="container">
       <div class="row section group">




<!--left part-->
        <div class="col-md-4">
        <h4 class="m_7">2017-2018 Capstone</h4>   
        <p class="address"><strong>Team 44</strong></p>
                 <p class="address">Address : 
            <small>919 E 10th St, Bloomington, IN 47408</small> </p>
          <p class="address">Tel : &nbsp;&nbsp;
                    (812) 856-5754&nbsp;; &nbsp;
                    </p>
                    <p class="address">Website ： <a class="address" href="#"> http://cgi.soic.indiana.edu/~team44/login.php</a></p> 
                    <br/>
                    
                
           </div>








<!--center part-->
                <div class="col-md-4">
                <div class="f-logo">
                  <p> </p>
                </div>
                </div>

              
 <!--right part-->               
              
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



<!--bottome banner starts here-->     
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
          <li class="facebook"><a href="https://www.facebook.com/groups/4711490235/"><span></span></a></li>
          <li class="instagram"><a href="https://www.instagram.com/spcamc/"><span></span></a></li>         
          </ul>
        </div>
       <div class="clear"></div>
      </div>


  
   <!-- modal windows -->
        <div id="numberone" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                        <h3 class="modal-title">Shiro's Intro</h3>
                    </div>
                    <div class="modal-body">
                        <p>Blablabla</p>
                        <img src="images/dogs/shiba.jpg" alt="springgala" class="img-responsive"/>
                        
                        <p>Intro of Shiba</p>
                     

                    <!--这里可以放视频
                    <iframe id="cartoonVideo" width="500" height="300" src="" frameborder="0" allowfullscreen></iframe> 
                    -->
                               
                      
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
  





  
          <div id="numbertwo" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                        <h3 class="modal-title">No.2</h3>
                    </div>
                    <div class="modal-body">
                        <p>Liz</p>
                        <img src="images/dogs/yorkshire.jpg" alt="springgala" class="img-responsive"/>
                        
                        
                    <!--视频    
                    <iframe width="500" height="300" src="" frameborder="0" allowfullscreen></iframe> 
                    
                    -->         
                      
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
  
         
        <!-- modal windows -->
          <div id="numberthree" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                        <h3 class="modal-title">No.3</h3>
                    </div>
                    <div class="modal-body">
                        <p>Paco</p>
                        <img src="images/dogs/boston.jpg" alt="springgala" class="img-responsive"/>
                        
                        
                    <!--视频    
                    <iframe width="500" height="300" src="" frameborder="0" allowfullscreen></iframe> 
                    
                    -->         
                      
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
  
  
 <!-- modal windows -->
        <div id="numberfour" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                        <h3 class="modal-title">No.4</h3>
                    </div>
                    <div class="modal-body">
                        <p><center>Blablabla</center></p>
           
            
                        <img src="images/dogs/golden.jpg" alt="4-1." class="img-responsive ">
                        <p>Intro</p>
                      
                        
                        
                        <!--video
                        <iframe id="cartoonVideo" width="500" height="300" src="http://static.video.qq.com/TPout.swf?vid=n0186f9u8ne&auto=0" frameborder="0" allowfullscrenn ></iframe>-->
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

<div id="numberfive" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                        <h3 class="modal-title">No.5</h3>
                    </div>
                    <div class="modal-body">
                        <p>Blablabla</p>
                     <img src="images/dogs/husky.jpg" alt="springgala" class="img-responsive"/>
                     <p>Intro</p>
                     <img src="" alt="springgala" class="img-responsive"/>
                     
                    <!--video
                    <iframe id="cartoonVideo" width="500" height="300"src="http://static.video.qq.com/TPout.swf?vid=c0185z3ax32&auto=0" frameborder="0" allowfullscreen></iframe>-->
                    
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
    </div>

<div id="numbersix" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                        <h3 class="modal-title">No.6</h3>
                    </div>
                    <div class="modal-body">
                        <p>Blablabla</p>
                        
                        <img src="images/dogs/samoyed.jpg" alt="springgala" class="img-responsive"/>
                        <!--video
                        <iframe id="cartoonVideo" width="500" height="300" src="" frameborder="0" allowfullscreen></iframe>-->
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
      
      
   <div id="numberseven" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                        <h3 class="modal-title">No.7</h3>
                    </div>
                    <div class="modal-body">
                        <p>Blablabla</p>
                        <img src="images/dogs/teddy.jpg" alt="springgala" class="img-responsive"/>
                 
                        <!--video
                        <iframe id="cartoonVideo" width="500" height="300" src="http://static.video.qq.com/TPout.swf?vid=y0187z57lz2&auto=0" frameborder="0" allowfullscreen></iframe>-->
           
                        </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        
<div id="numbereight" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                        <h3 class="modal-title">No.8</h3>
                    </div>
                    <div class="modal-body">
                        <p>Blablabla</p>
                        <img src="images/dogs/snoopy.jpg" alt="springgala" class="img-responsive"/>
                 
                        <!--video
                        <iframe id="cartoonVideo" width="500" height="300" src="http://static.video.qq.com/TPout.swf?vid=s0185eui3hp&auto=0" frameborder="0" allowfullscreen> ></iframe>-->
        
                                </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


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