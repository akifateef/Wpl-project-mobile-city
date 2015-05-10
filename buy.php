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
<link rel="stylesheet" href="css2/style.css">
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

function empty_txt_bx() 
{


// if(document.dataform.Name.value==""&&)
// {
//   alert("");
//   return false;
// }
// }   
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
                 

            


          </div>
      </div>
     </div>
   </div>
   
  
   
   
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
       <!--  <div class="rightsidebar span_3_of_1">
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
            
              
        </div> -->
    </div>
  </div>
    </div>
 </div>
   <div class="footer">
      <div class="wrap">  
       <div class="section group">
      

      <!-- new edit -->


      <?php
$pri = $_GET['pr'];
$mob_name = $_GET['model']; 
$vender_name = $_GET['bn'];

?>

  <!-- <div class="container"> -->
<center>
  <div id="login-form">

    <h3>Information</h3>

    <fieldset>
 <script type="text/javascript">
    function empty_txt_bx() 
{


if((document.dataform.first_naam.value=="") ||
  (document.dataform.last_naam.value=="" )||
  (document.dataform.mobile_number.value=="") ||
  (document.dataform.phone_no.value=="" )||
  (document.dataform.address.value=="" )||
  (document.dataform.email_id.value=="" )||
 ( document.dataform.city.value=="" )||
(document.dataform.cnic.value==""))
{
  alert("PLEASE FILL ALL INFORMATION");
  return false;
}
else
{
  alert("SUCCESS");
}
}
</script>
      <form action="invoice.php?pr1=$pri" method="GET" name="dataform" onsubmit="return empty_txt_bx(this);">
   <h4 align="center" style="color: #600000; "> 
  <?php echo htmlspecialchars($_GET['bn']); ?> 
<?php echo htmlspecialchars($_GET['model']); ?><br>
    Price: <?php echo htmlspecialchars($_GET['pr']); ?>
    </h4>
        <input type="text" id="first_naam" placeholder="First Name" name="first_naam">


        <input type="text" id="last_naam" placeholder="Last Name" name="last_naam">

        <input type="text" id="mobile_number" placeholder="Mobile Number" name="mobile_number">  

        <input type="text" id="phone_no" placeholder="Phone No." name="phone_no">

        <input type="text" id="address" placeholder="Address" name="address">

        <input type="text" id="email_id" placeholder="Email" name="email_id">

        <input type="text" id="city" placeholder="City" name="city">

        <input type="text" id="cnic" placeholder="CNIC No." name="cnic">    
    
    <input type="text"  name="PRICE" readonly="readonly"  value="Price: <?php echo $pri; ?>">
    
    <input type="text"  name="model"  readonly="readonly" value="Model: <?php echo $vender_name; echo " "; echo $mob_name; ?>">
<br>
<br>        <input type="submit" value="Submit" onclick="empty_txt_bx()">

        <footer class="clearfix">

        </footer>

      </form>
     

    </fieldset>

  </div> 

  </center>
  <!-- end login-form -->

<!-- </div> -->

<!-- new edit -->


      </div>      
        </div>
        <div class="copy_right">
        <p>All rights Reseverd | Design by  <a href="index.php">IUNC TIGERS</a> </p>
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










