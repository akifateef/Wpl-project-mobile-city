<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<style>

</style>
<title>Mobile City | Mobile</title>
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
			    	
			    	<li><a href="team.html">Team
					</a></li>
			 
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

				
<?php

$brand_name = $_GET['nn'];
$brand_name1 = $_GET['nn1'];

?>

<h1 style="font-weight:bold; color: #B22222; font-size:24pt;"> <?php echo "PRICE BETWEEN "; echo $brand_name1; echo " - "; echo $brand_name;  ?></h1>




<?php
include('con_db.php');

$query = "SELECT * FROM mobiles_data where price>='".$brand_name."' and price<='".$brand_name1."' ORDER BY price DESC";

$fetch = mysql_query($query) or die(mysql_error());


while($result = mysql_fetch_assoc($fetch))
{
	//echo $result['name'];
?>

<!--"SELECT  * FROM mobiles_data where price >= 40000";-->



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
				       <li><a href="mobile.php?nn=HTC">htc</a></li>
				          <li><a href="mobile.php?nn=SONY">sony</a></li>
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

