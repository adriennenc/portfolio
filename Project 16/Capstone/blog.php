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
<title>Blog Page</title>
<script type="text/javascript" src="_mootools.js"></script>
<script type="text/javascript" src="_class.noobSlide.js"></script>
<link rel="stylesheet" href="_web.css" type="text/css" media="screen" />
<link rel="stylesheet" href="styless.css" type="text/css" media="screen" />
<link href="styles.css" rel='stylesheet' type='text/css' />
<link href="info.css" rel='stylesheet' type='text/css' />
<link href="normalize.css" rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<!-- //grid-slider -->
<!---calender-style---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style2.css" rel="stylesheet" type="text/css">
<!---//calender-style---->  
<style type='text/css'>
#image-gallery {display: none;}
  #jquery-gallery {padding:0;margin:0;list-style: none; width: 500px;}
  #jquery-gallery li {width:84px; height: 80px;background-size: 100%;-webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;background-size: cover;margin-right: 10px; border: 3px solid #fff; outline: 1px solid #E3E3E3; margin-bottom: 10px;opacity: .5; filter:alpha(opacity=50); float: left; display: block; }
#jquery-gallery li img { position: absolute; top: 100px; left: 0px; display: none;}
  #jquery-gallery li.active img { display: block; border: 3px solid #fff; outline: 1px solid #E3E3E3; width:490px; max-height: 375px;}
  #jquery-gallery li.active, #jquery-gallery li:hover { outline-color: #DFDFDF; opacity: .99;filter:alpha(opacity=99);}
#gallery-caption {background: rgba(0, 0, 0, 0.3);color: #fff;font-size: 16px;font-weight: bold;left: 3px;position: absolute;text-align: center;top: 103px;width: 490px;text-transform: uppercase;}
</style>
<style>
body{
  margin:0;
  padding:0;
}

#menu li{
  list-style-type:none;

}

#menu li img{
  height:80px;
  width:100px;
  padding-bottom:5px;
}

#left {
  
  float:left;
  margin:30px;
  
}
.right{
  height:400px;
  widows:600px;
  float:left;
  margin:30px;
}
</style>
<script>
function onHover(element,number)
{
document.getElementsByClassName("right")[number].src= element.getAttribute('src');
}
</script>
<script type='text/javascript'>
//<![CDATA[
var gal = {
init : function() {
if (!document.getElementById || !document.createElement || !document.appendChild) return false;
if (document.getElementById('image-gallery')) document.getElementById('image-gallery').id = 'jquery-gallery';
var li = document.getElementById('jquery-gallery').getElementsByTagName('li');
li[0].className = 'active';
for (i=0; i<li.length; i++) {
li[i].style.backgroundImage = 'url(' + li[i].getElementsByTagName('img')[0].src + ')';
li[i].title = li[i].getElementsByTagName('img')[0].alt;
gal.addEvent(li[i],'click',function() {
var im = document.getElementById('jquery-gallery').getElementsByTagName('li');
for (j=0; j<im.length; j++) {
im[j].className = '';
}
this.className = 'active';
document.getElementById('gallery-caption').innerHTML = this.title;
});
}
},
addEvent : function(obj, type, fn) {
if (obj.addEventListener) {
obj.addEventListener(type, fn, false);
}
else if (obj.attachEvent) {
obj["e"+type+fn] = fn;
obj[type+fn] = function() { obj["e"+type+fn]( window.event ); }
obj.attachEvent("on"+type, obj[type+fn]);
}
}
}
gal.addEvent(window,'load', function() {
gal.init();
});
//]]>
</script>
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

	   <li class='active'><a href='blog.php'><span>Blogs</span></a></li>
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
       <center><div class="about_banner_img"><img src="images/banner2.jpg" class="img-responsive" alt=""></div></center>
		 <div class="about_banner_wrap">
      	    <h1 class="m_11">Blog</h1>
      	</div>






<div class="border"> </div>
        <div class="container">
          <div class="row single-top">
           <div class="col-md-12">
           
               
               
               <div class="blog_box">
         <div class="blog_grid">
          <h3><a href="event1.html">Event1 </a></h3><i class="document"> </i>
      <ul class="links">
                <li><a href="event1.html"><i class="blog_icon1"> </i>2018.2.20 </a></li>
                
              </ul> 
                        <hr>  
          <div class="singe_desc">
            <p>Intro here</p>
            <img src="images/cats/cat8.jpg" height="180px" alt=""/>
             <div class="comments">
              
              <div class="btn_blog"><a href="event1.html">Read More</a>
                  </div>
                  <div class="clear"></div>
               </div>
          </div>
         </div>
        </div>
               
                <div class="blog_box">
         <div class="blog_grid">
          <h3><a href="event2.html">Event 2 </a></h3><i class="document"> </i>
      <ul class="links">
                <li><a href="#"><i class="blog_icon1"> </i>2018.2.10</a></li>
                
              </ul> 
                        <hr>  
          <div class="singe_desc">
            <p>Intro here</p>
            <img src="images/dogs/shiba.jpg" height="180px" alt=""/>
             <div class="comments">
              
              <div class="btn_blog"><a href="#">Read More</a>
                  </div>
                  <div class="clear"></div>
               </div>
          </div>
         </div>
        </div>
               
          <div class="blog_box">
         <div class="blog_grid">
          <h3><a href="event3.html">Event 3</a></h3><i class="document"> </i>
      <ul class="links">
                <li><a href="#"><i class="blog_icon1"> </i>2018.2.20</a></li>
                
              </ul> 
                        <hr>  
          <div class="singe_desc">
            <p>Intro Here </p>
            <img src="images/ferrets/ferret2.jpg" height="180px" alt=""/>
             <div class="comments">
              
              <div class="btn_blog"><a href="http://page.renren.com/600720368/note/943154835">Read More</a>
                  </div>
                  <div class="clear"></div>
               </div>
          </div>
         </div>
        </div>
               
               
                <div class="blog_box">
         <div class="blog_grid">
          <h3><a href="event4.html">Event 4 </a></h3><i class="document"> </i>
      <ul class="links">
                <li><a href="#"><i class="blog_icon1"> </i>2018.2.20</a></li>
                
              </ul> 
                        <hr>  
          <div class="singe_desc">
            <p>Intro Here </p>
            <img src="images/ferrets/ferret3.jpg" height="180px" alt=""/>
             <div class="comments">
              
              <div class="btn_blog"><a href="http://page.renren.com/600720368/note/943154835">Read More</a>
                  </div>
                  <div class="clear"></div>
               </div>
          </div>
         </div>
        </div>
        
             
                
              
                
        
        <ul class="dc_pagination dc_paginationA dc_paginationA06">
          <li><a href="#" class="current">Prev</a></li>
          <li><a href="blog.html">1</a></li>
          <li><a href="blog2.html">2</a></li>
          <li><a href="blog2.html" class="current">Next</a></li>
           </ul>
         </div>
        
        <div class="clear"></div>
        </div>
        </div> 
     </div>

 
               



 
          
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

<!-- modal windows -->
        <div id="activity" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                        <h3 class="modal-title">Event1</h3>
                    </div>
                    <div class="modal-body">
                        <img src="images/cats/cat8.jpg" alt="springgala" class="img-responsive"/>
                        <center><p>Here's intro</p></center>
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
     <div id="media" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                        <h3 class="modal-title">Event2</h3>
                    </div>
                    <div class="modal-body">
                    <img src="images/ferrets/ferret2.jpg" alt="springgala" class="img-responsive"/>
                        <center><p>Here's intro</p></center>
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
       
        <div id="finance" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                        <h3 class="modal-title">Event3</h3>
                    </div>
                    <div class="modal-body">    
                        <img src="images/dogs/shiba.jpg" alt="springgala" class="img-responsive"/>
                        <center><p>Intro here</p></center>
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

	</body>
</html>