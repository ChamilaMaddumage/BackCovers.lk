<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Snow Bootstrap Website Template | Shop :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
	    	  <?php include ("includes/headersubpages.php"); ?>

    
    
    
    
    
    
    
    
    
    
    
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
                
                
                
                
                
             
                 <?php
include("includes/connect.php");
     $select_post="select * from Items  where Item_Type IN ('Samsung') order by 1 DESC";
     $run_posts=mysqli_query($connection,$select_post);
while($row=mysqli_fetch_array($run_posts)){
    $item_id=$row['Item_Id'];
    $item_type=$row['Item_Type'];
    $item_name=$row['Item_Name'];
    $available_quantity=$row['Available_Quantity'];
    $item_description=$row['Item_Discreption'];
    $item_image=$row['Item_Image'];
    $item_price=$row['Item_Price'];
    $setup_date=$row['Setup_Date'];
?> 
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="admin/images/Items/<?php echo $item_image;  ?>" style="width:355px;height:300px;" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<!--<span class="sale-box">
						<span class="sale-label">Sale!</span>
					</span>-->
					<div class="shop_desc">
						<h3><a href="#"><?php echo $item_name ?></a></h3>
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
						<p><?php echo substr($item_description,0,25); ?></p>
						<span class="reducedfrom">$66.00</span>
						<span class="actual"><?php echo $item_price ?></span><br>
						<ul class="buttons">
							<li class="cart"><a href="single.php?id=<?php echo $item_id;  ?>" target="_blank">Add To Cart</a></li>
							<li class="shop_btn"><?php echo $available_quantity ?> Available</li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<?php  } ?>  
				
                
                
                
                
                
                
				
				
				
			</div>
    
		 </div>
	   </div>
	  </div>
    
    
    
    
	 <?php include ("includes/footer.php"); ?>
</body>	
</html>