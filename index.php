<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Mobile City</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
</head>
<body>
  <div class="wrap">
	<div class="header">
		
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="300px" height="150px" alt="" /></a>
			</div>
			 
			
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="index.php">Home</a></li>
			   
			    	<li><a href="team.html">Team</a></li>
			    	
			    	<li><a href="contact.html">Contact</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     
	     	<div class="clear"></div>
	     </div>	     
	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				  <ul>
				  	<h3>BRANDS</h3>
				      <li><a href="mobile.php?nn=NOKIA">Nokia</a></li>
				      <li><a href="mobile.php?nn=SAMSUNG">Samsung</a></li>
				      <li><a href="mobile.php?nn=APPLE">Apple</a></li>
				      <li><a href="mobile.php?nn=LENOVO">Lenovo</a></li>
				      <li><a href="mobile.php?nn=MICROSOFT">Microsoft</a></li>
				       <li><a href="mobile.php?nn=QMOBILE">QMobile</a></li>
				       <li><a href="mobile.php?nn=HTC">htc</a></li>
				          <li><a href="mobile.php?nn=SONY">sony</a></li>
				      	<h3>Search by price</h3>
						
						<li><a href="mobile1.php?nn=80000&nn1=120000">Between 120000 - 80000</a></li>
					<li><a href="mobile1.php?nn=60000&nn1=80000">Between 80000 - 60000</a></li>
				      <li><a href="mobile1.php?nn=40000&nn1=60000">Between 60000 - 40000</a></li>
				      <li><a href="mobile1.php?nn=20000&nn1=40000">Between 20000 - 40000</a></li>
				      <li><a href="mobile1.php?nn=10000&nn1=20000">Between 10000 - 20000</a></li>
				      
				     
				      
				  </ul>
				</div>					
	  	     </div>
					 <div class="header_bottom_right">					 
					 	 <div class="slider">					     
							 <div id="slider">
			                    <div id="mover">
			                    	<div id="slide-1" class="slide">			                    
									 <div class="slider-img">
									     <a href="index.php"><img src="images/slide-1-image.png" alt="learn more" /></a>									    
									  </div>
						             	<div class="slider-text">
		                                 <h1>SAMSUNG<br><span>S6</span></h1>
		                                 <h2>UPTo 20% OFF</h2>
									  
							       
					                   </div>			               
									  <div class="clear"></div>				
				                  </div>	
						             	<div class="slide">
						             		<div class="slider-text">
		                                 <h1>IPHONE<br><span>6+</span></h1>
		                                 <h2>UPTo 40% OFF</h2>
									   <div class="features_list">
									   	<h4>Get to Know More About Our Memorable Services</h4>							               
							            </div>
							            
					                   </div>		
						             	 <div class="slider-img">
									     <a href="index.php"><img src="images/slide-2-image.png" alt="learn more" /></a>
									  </div>						             					                 
									  <div class="clear"></div>				
				                  </div>
				                  <div class="slide">						             	
					                  <div class="slider-img">
									     <a href="index.php"><img src="images/slide-3-image.png" alt="learn more" /></a>
									  </div>
									  <div class="slider-text">
		                                 <h1>NOKIA<br><span>LUMIA</span></h1>
		                                 <h2 style="color: BLACK;">Connecting People</h2>
									   <div class="features_list">
									   							               
							        
									  <div class="clear"></div>				
				                  </div>												
			                 </div>		
		                </div>
					 <div class="clear"></div>					       
		         </div>
		      </div>
		   <div class="clear"></div>
		</div>
   </div>



    		
    		
    		<div class="clear"></div>
    
	    
			<div class="content_bottom">
    		<h2>Latest Products </h2>
    		<?php
include('con_db.php');

$query = "SELECT  * FROM mobiles_data where price >= 40000 ORDER BY price DESC";

// ORDER BY column_name ASC|DESC
// ORDER BY Country DESC;
$fetch = mysql_query($query) or die(mysql_error());


while($result = mysql_fetch_assoc($fetch))
{
	
?>




						<div class="grid_1_of_4 images_1_ofof_4" >
					 <a href="preview.php?id=<?php echo $result['id'] ?>">
					 <img src="<?php echo $result['url']; ?>" alt="" style="width:110px;height:200px; " /></a>					
					 <h2><?php echo $result['brand']; echo " "; echo $result['name_model'] ?> </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees"><?php echo $result['price'] ?></span></p>
					    </div>
					       	
					</div>
				</div>		
			

<?php
}
?>			

    		<div class="clear"></div>
    
		
	


</div>
   <div class="footer">
   	  
        <div class="copy_right">
				<p>All rights Reseverd | Design by  <a href="team.html">IUNC TIGERS</a> </p>
		   </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

