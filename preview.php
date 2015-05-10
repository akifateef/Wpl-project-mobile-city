<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Mobile | City</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/global.css">
<script src="js/slides.min.jquery.js"></script>
<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
</head>
<body>
  <div class="wrap">
	<div class="header">
		
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="300px" height="150px" alt="" /></a>
			</div>
			  
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li><a href="index.php">Home</a></li>
			    	
			    	<li><a href="team.html">Team</a></li>
			 
			    	<li><a href="contact.html">Contact</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	    
	     	<div class="clear"></div>
	     </div>	     	
   </div>
 <div class="main">
   
    	<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">				
					<div class="grid images_3_of_2">
					<div id="container"> 
						   <div id="products_example">
							   <div id="products">
							   

<?php

$id_nn = $_GET['id'];


include('con_db.php');

$query = "SELECT * FROM mobiles_data where id= $id_nn";

$fetch = mysql_query($query) or die(mysql_error());


while($result = mysql_fetch_assoc($fetch)){
//echo $result['url'];	


?>

							<div >  
									<a href="#" ><img src="<?php echo $result['url'] ?>" alt=" " style="width:110px;height:200px; " /></a>
									</div>   
									<!--<a href="#" target="_blank"><img src="images/productslide-2.jpg" alt=" " /></a>
									<a href="#" target="_blank"><img src="images/productslide-3.jpg" alt=" " /></a>					
									<a href="#" target="_blank"><img src="images/productslide-4.jpg" alt=" " /></a>
									<a href="#" target="_blank"><img src="images/productslide-5.jpg" alt=" " /></a>
									<a href="#" target="_blank"><img src="images/productslide-6.jpg" alt=" " /></a>
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="images/thumbnailslide-1.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/thumbnailslide-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/thumbnailslide-3.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/thumbnailslide-4.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/thumbnailslide-5.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/thumbnailslide-6.jpg" alt=" " /></a></li>
								</ul>-->
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
					<h2  style="font-size:20pt"><?php echo $result['brand']; echo " "; echo $result['name_model'];?> </h2>
					<div class="price">
						<p>Price: <span><?php echo $result['price'] ?> </span></p>
					</div>
<div class="add-cart">					 
<h4><a href="buy.php?pr=<?php echo $result['price'];?> & bn=<?php echo $result['brand'];?>&model=<?php echo $result['name_model']; ?>">Buy</a></h4>
							     </div>		
										
					
								 
					<!--<div class="available">
						<p>Available Options :</p>
					<ul>
						<li>Color:
							<select>
							<option>Silver</option>
							<option>Black</option>
							<option>Dark Black</option>
							<option>Red</option>
						</select></li>
						<li>Size:<select>
							<option>Large</option>
							<option>Medium</option>
							<option>small</option>
							<option>Large</option>
							<option>small</option>
						</select></li>
						<li>Quality:<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select></li>
					</ul>
					</div>-->
				
				
			</div>
		
		  </div>
		
		
		
		<div class="product_desc">	
		
		<br /><br />
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Product Details</li>
				
				
				
				</ul>
				<div class="resp-tabs-container">
					<!div class="product-desc">
					<div>
						<table >
							<tr>
								<td  style="width:22%">WHATS NEW</td>
								<td><?php echo $result['what_new'] ?></td>
							</tr>
							
							<tr ><td colspan="2" style="color:red">---------------------------------------------------------------------------------------------------------------------------------</td>
							</tr>
							
								<tr>
								<td  style="width:22%">OS</td>
								<td><?php echo $result['os'] ?></td>
							</tr>
							
							<tr ><td colspan="2" style="color:red">---------------------------------------------------------------------------------------------------------------------------------</td>
							</tr>
							
							<tr>
								<td  style="width:22%">MEMORY</td>
								<td><?php echo $result['memory'] ?></td>
							</tr>
						
						<tr ><td colspan="2" style="color:red">---------------------------------------------------------------------------------------------------------------------------------</td>
							</tr>
								
							<tr>
								<td  style="width:22%">PROCESSOR</td>
								<td><?php echo $result['processor'] ?></td>
							</tr>
							
							
							<tr ><td colspan="2" style="color:red">---------------------------------------------------------------------------------------------------------------------------------</td>
							</tr>
							
							<tr>
								<td  style="width:22%">DISPLAY SIZE</td>
								<td><?php echo $result['display_size'] ?></td>
							</tr>
							
							
							<tr ><td colspan="2" style="color:red">---------------------------------------------------------------------------------------------------------------------------------</td>
							</tr>
							
							
							<tr>
								<td  style="width:22%">CAMERA</td>
								<td><?php echo $result['camera'] ?></td>
							</tr>
						
						</table>
						
						
					</div>

				 

			
			</div>
		 </div>
	 </div>
	 
	 <?php } ?>
	 
	 
	 
	    <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>		
  

        </div>
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
				       <li><a href="mobile.php?nn=NOKIA">Nokia</a></li>
				      <li><a href="mobile.php?nn=SAMSUNG">Samsung</a></li>
				      <li><a href="mobile.php?nn=APPLE">Apple</a></li>
				      <li><a href="mobile.php?nn=LENOVO">Lenovo</a></li>
				      <li><a href="mobile.php?nn=MICROSOFT">Microsoft</a></li>
				       <li><a href="mobile.php?nn=QMOBILE">QMobile</a></li>
				       <li><a href="mobile.php?nn=HTC">HTC</a></li>
				          <li><a href="mobile.php?nn=SONY">Sony</a></li>
    				</ul>
    				
      				
 				</div>
 		</div>
 	</div>
    </div>
 </div>
   <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
			
			

			</div>			
        </div>
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

