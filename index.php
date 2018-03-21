

<!DOCTYPE HTML>

<html>

<head>

<title>Home</title>

    

   <style>

.checked {

    color:#ef0909;

}

.cart, .shop_btn {

    padding: 10px 10px;

    text-align: center;

    text-decoration: none;

    display: inline-block;

}





.cart,.shop_btn {

    background: linear-gradient(#e24027, #e6b2aa);

}

</style> 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    

    

    

<!--

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

-->

<link href="css/style.css" rel='stylesheet' type='text/css' />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/jquery.min.js"></script>

<!--<script src="js/jquery.easydropdown.js"></script>-->

<!--start slider -->

<link rel="stylesheet" href="css/fwslider.css" media="all">

<script src="js/jquery-ui.min.js"></script>

<script src="js/fwslider.js"></script>

<!--end slider -->

<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");
            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).php();
                $(".dropdown dt a span").php(text);
                $(".dropdown dd ul").hide();
                $("#result").php("Selected value is: " + getSelectedValue("sample"));
            });
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").php();
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

    

	<?php include ("includes/header.php"); ?>

    

   

	<div class="banner">

	<!-- start slider -->

       <div id="fwslider">

         <div class="slider_container">

            <div class="slide"> 

                <!-- Slide image -->

               <img src="images/sl51.jpg" style="height:auto" class="img-responsive" alt=""/>

                <!-- /Slide image -->

                <!-- Texts container -->

                <!--<div class="slide_content">

                    <div class="slide_content_wrap">

                        <h1 class="title">Run Over<br>Everything</h1>

                        <div class="button"><a href="#">See Details</a></div>

                    </div>

                </div>-->

               <!-- /Texts container -->

            </div>

            <!-- /Duplicate to create more slides -->

            <div class="slide">

               <img src="images/slider22.jpg" style="height:auto" class="img-responsive" alt=""/>

                <!--<div class="slide_content">

                    <div class="slide_content_wrap">

                        <h1 class="title">Run Over<br>Everything</h1>

                       	<div class="button"><a href="#">See Details</a></div>

                    </div>

                </div>-->

            </div>

			<div class="slide">

               <img style="height:auto" src="images/slider18.jpg"   class="img-responsive" alt=""/>

                <!--<div class="slide_content">

                    <div class="slide_content_wrap">

                        <h1 class="title">Run Over<br>Everything</h1>

                       	<div class="button"><a href="#">See Details</a></div>

                    </div>

                </div>-->

            </div>

            <!--/slide -->

        </div>

        <div class="timers"></div>

        <div class="slidePrev"><span></span></div>

        <div class="slideNext"><span></span></div>

       </div>

       <!--/slider -->

      </div>

    



    

    

    

      <div class="main">

		<div class="content-top">

			<h2>New Releases</h2>

			<div class="close_but"></div>

			<div class="row shop_box-top">

				<ul id="flexiselDemo3">

				

				

                    

                     <?php

include("includes/connect.php");

     $select_post="select * from Items  where Item_Type IN ('Apple','Samsung','Huawei','Sony','Nokia','Other') AND Available_Quantity>0 order by 1 DESC LIMIT 0,5";

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

				<li><div class="col-md-12 shop_box"><a href="single.php?id=<?php echo $item_id;  ?>" target="_blank">

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

<span class="fa fa-star checked"></span>

<span class="fa fa-star checked"></span>

						<p><?php echo substr($item_description,0,22); ?>...</p>

						<span>Price:</span>

						<span class="actual">Rs.<?php echo $item_price ?></span><br>

				    </div>

				</a></div></li>

				<?php  } ?>      

			</ul>

			</div>

			<script type="text/javascript">

		$(window).load(function() {

			$("#flexiselDemo3").flexisel({

				visibleItems: 5,

				animationSpeed: 1000,

				autoPlay: true,

				autoPlaySpeed: 3000,    		

				pauseOnHover: true,

				enableResponsiveBreakpoints: true,

		    	responsiveBreakpoints: { 

		    		portrait: { 

		    			changePoint:480,

		    			visibleItems: 1

		    		}, 

		    		landscape: { 

		    			changePoint:640,

		    			visibleItems: 2

		    		},

		    		tablet: { 

		    			changePoint:768,

		    			visibleItems: 3

		    		}

		    	}

		    });

		    

		});

		</script>

		<script type="text/javascript" src="js/jquery.flexisel.js"></script>

		</div>

	</div>  

    

     <div class="main" id="apple" name="apple"> 

      <div class="shop_top">

          <center>	<h2 class="glyphicon glyphicon-phone">APPLE</h2></center><br>

<!--

        <center>	<h2>APPLE</h2></center><br>

-->

		<div class="container">

			<div class="row shop_box-top">



                

                

                

                

                 <?php

include("includes/connect.php");

     $select_post="select * from Items  where Item_Type IN ('Apple') order by 1 DESC LIMIT 0,8";

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

                

                

                

                



				<div class="col-md-3 shop_box">
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
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
						<p><?php echo substr($item_description,0,22); ?>...</p>
						<span>Price:</span>
						<span class="actual">Rs.<?php echo $item_price ?></span><br>
						<ul class="buttons">
                            <?php if($available_quantity>0){ ?>
							<li class="cart"><a href="single.php?id=<?php echo $item_id;  ?>" target="_blank">Buy Now</a></li>
   <?php }else{ ?>			
                            <li class="cart"><a>No Items</a></li>              
   <?php } ?>
                            <li class="shop_btn"><?php if($available_quantity>0){
                                   echo"Available";
    }else{    echo"Not Available";
							}
                                ?>
                                </li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</div>

                
                
                				<?php  } ?>      

			</div>

            

            

            

		<br>

			 <center>	<a href="appleshop.php"><h3 class="viewmore">VIEW MORE</h3></a></center>

			

		 </div>

	   </div>

	  </div>

    

    

        

        

     <div class="main" id="samsung"> 

      <div class="shop_top">

        <center>	<h2 class="glyphicon glyphicon-phone">SAMSUNG</h2></center><br>

		<div class="container">

			<div class="row shop_box-top">

<!--

                			<h2 class="glyphicon glyphicon-phone">APPLE</h2>

-->



                 <?php

include("includes/connect.php");

     $select_post="select * from Items  where Item_Type IN ('Samsung') order by 1 DESC LIMIT 0,8";

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

			<div class="col-md-3 shop_box">
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
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
						<p><?php echo substr($item_description,0,22); ?>...</p>
						<span>Price:</span>
						<span class="actual">Rs.<?php echo $item_price ?></span><br>
						<ul class="buttons">
                            <?php if($available_quantity>0){ ?>
							<li class="cart"><a href="single.php?id=<?php echo $item_id;  ?>" target="_blank">Buy Now</a></li>
   <?php }else{ ?>			
                            <li class="cart"><a>No Items</a></li>              
   <?php } ?>
                            <li class="shop_btn"><?php if($available_quantity>0){
                                   echo"Available";
    }else{    echo"Not Available";
							}
                                ?>
                                </li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</div>

				<?php  } ?>  

				

				

			</div>

			<br>

			 <center>	<a href="samsungshop.php"><h3 class="viewmore">VIEW MORE</h3></a></center>

		 </div>

	   </div>

	  </div>

    

    

    

    

    

    

    

        

        

     <div class="main" id="huawei"> 

      <div class="shop_top">

        <center>	<h2 class="glyphicon glyphicon-phone">HUAWEI</h2></center><br>

		<div class="container">

				<div class="row shop_box-top">

<!--

                			<h2 class="glyphicon glyphicon-phone">APPLE</h2>

-->



                 <?php

include("includes/connect.php");

     $select_post="select * from Items  where Item_Type IN ('Huawei') order by 1 DESC LIMIT 0,8";

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

				<div class="col-md-3 shop_box">
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
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
						<p><?php echo substr($item_description,0,22); ?>...</p>
						<span>Price:</span>
						<span class="actual">Rs.<?php echo $item_price ?></span><br>
						<ul class="buttons">
                            <?php if($available_quantity>0){ ?>
							<li class="cart"><a href="single.php?id=<?php echo $item_id;  ?>" target="_blank">Buy Now</a></li>
   <?php }else{ ?>			
                            <li class="cart"><a>No Items</a></li>              
   <?php } ?>
                            <li class="shop_btn"><?php if($available_quantity>0){
                                   echo"Available";
    }else{    echo"Not Available";
							}
                                ?>
                                </li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</div>

				<?php  } ?>  

				

				

			</div>

		<br>

			 <center>	<a href="huaweishop.php"><h3 class="viewmore">VIEW MORE</h3></a></center>

		 </div>

	   </div>

	  </div>

    

    

    

    

    

    

    

        

        

     <div class="main" id="sony"> 

      <div class="shop_top">

        <center>	<h2 class="glyphicon glyphicon-phone">SONY</h2></center><br>

		<div class="container">

					<div class="row shop_box-top">

<!--

                			<h2 class="glyphicon glyphicon-phone">APPLE</h2>

-->



                 <?php

include("includes/connect.php");

     $select_post="select * from Items  where Item_Type IN ('Sony') order by 1 DESC LIMIT 0,8";

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

			<div class="col-md-3 shop_box">
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
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
						<p><?php echo substr($item_description,0,22); ?>...</p>
						<span>Price:</span>
						<span class="actual">Rs.<?php echo $item_price ?></span><br>
						<ul class="buttons">
                            <?php if($available_quantity>0){ ?>
							<li class="cart"><a href="single.php?id=<?php echo $item_id;  ?>" target="_blank">Buy Now</a></li>
   <?php }else{ ?>			
                            <li class="cart"><a>No Items</a></li>              
   <?php } ?>
                            <li class="shop_btn"><?php if($available_quantity>0){
                                   echo"Available";
    }else{    echo"Not Available";
							}
                                ?>
                                </li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</div>

				<?php  } ?>  

				

				

			</div>

			<br>

			 <center>	<a href="sonyshop.php"><h3 class="viewmore">VIEW MORE</h3></a></center>

		 </div>

	   </div>

	  </div>

    

    

    

    

    

    

    

        

        

     <div class="main" id="nokia"> 

      <div class="shop_top">

        <center>	<h2 class="glyphicon glyphicon-phone">NOKIA</h2></center><br>

		<div class="container">

			<div class="row shop_box-top">

<!--

                			<h2 class="glyphicon glyphicon-phone">APPLE</h2>

-->



                 <?php

include("includes/connect.php");

     $select_post="select * from Items  where Item_Type IN ('Nokia') order by 1 DESC LIMIT 0,8";

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

			<div class="col-md-3 shop_box">
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
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
						<p><?php echo substr($item_description,0,22); ?>...</p>
						<span>Price:</span>
						<span class="actual">Rs.<?php echo $item_price ?></span><br>
						<ul class="buttons">
                            <?php if($available_quantity>0){ ?>
							<li class="cart"><a href="single.php?id=<?php echo $item_id;  ?>" target="_blank">Buy Now</a></li>
   <?php }else{ ?>			
                            <li class="cart"><a>No Items</a></li>              
   <?php } ?>
                            <li class="shop_btn"><?php if($available_quantity>0){
                                   echo"Available";
    }else{    echo"Not Available";
							}
                                ?>
                                </li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</div>

				<?php  } ?>  

				

				

			</div>

		<br>

			 <center>	<a href="nokiashop.php"><h3 class="viewmore">VIEW MORE</h3></a></center>

		 </div>

	   </div>

	  </div>

	  

    

    

    

    

	  <div class="main" id="others"> 

      <div class="shop_top">

        <center>	<h2 class="glyphicon glyphicon-phone">OTHERS</h2></center><br>

		<div class="container">

				<div class="row shop_box-top">

<!--

                			<h2 class="glyphicon glyphicon-phone">APPLE</h2>

-->



                 <?php

include("includes/connect.php");

     $select_post="select * from Items  where Item_Type IN ('Other') order by 1 DESC LIMIT 0,8";

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

		<div class="col-md-3 shop_box">
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
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
						<p><?php echo substr($item_description,0,22); ?>...</p>
						<span>Price:</span>
						<span class="actual">Rs.<?php echo $item_price ?></span><br>
						<ul class="buttons">
                            <?php if($available_quantity>0){ ?>
							<li class="cart"><a href="single.php?id=<?php echo $item_id;  ?>" target="_blank">Buy Now</a></li>
   <?php }else{ ?>			
                            <li class="cart"><a>No Items</a></li>              
   <?php } ?>
                            <li class="shop_btn"><?php if($available_quantity>0){
                                   echo"Available";
    }else{    echo"Not Available";
							}
                                ?>
                                </li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</div>

				<?php  } ?>  

				

				

			</div>

		<br>

			 <center>	<a href="othershop.php"><h3 class="viewmore">VIEW MORE</h3></a></center>

		 </div>

	   </div>

	  </div>

    

    

    

    

    

    

    

    

    

    

    	  <div class="main" id="otherprotectors"> 

      <div class="shop_top">

        <center>	<h2 class="glyphicon glyphicon-phone">OTHER PROTECTORS</h2></center><br>

		<div class="container">

				<div class="row shop_box-top">

<!--

                			<h2 class="glyphicon glyphicon-phone">APPLE</h2>

-->



                 <?php

include("includes/connect.php");

     $select_post="select * from Items  where Item_Type IN ('OtherProtector') order by 1 DESC LIMIT 0,8";

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

			<div class="col-md-3 shop_box">
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
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
						<p><?php echo substr($item_description,0,22); ?>...</p>
						<span>Price:</span>
						<span class="actual">Rs.<?php echo $item_price ?></span><br>
						<ul class="buttons">
                            <?php if($available_quantity>0){ ?>
							<li class="cart"><a href="single.php?id=<?php echo $item_id;  ?>" target="_blank">Buy Now</a></li>
   <?php }else{ ?>			
                            <li class="cart"><a>No Items</a></li>              
   <?php } ?>
                            <li class="shop_btn"><?php if($available_quantity>0){
                                   echo"Available";
    }else{    echo"Not Available";
							}
                                ?>
                                </li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</div>

				<?php  } ?>  

				

				

			</div>

		<br>

			 <center>	<a href="otherprotectorshop.php"><h3 class="viewmore">VIEW MORE</h3></a></center>

		 </div>

	   </div>

	  </div>

    

    <?php include ("includes/footer.php"); ?>

    
</body>	

</html>