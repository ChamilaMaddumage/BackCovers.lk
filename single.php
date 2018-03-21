

<?php

$reference_no="";

?>

<!DOCTYPE HTML>

<html>

<head>

<title>More Details</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<!--

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

-->

<link href="css/style.css" rel='stylesheet' type='text/css' />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/jquery.min.js"></script>



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

     <!----details-product-slider--->

				<!-- Include the Etalage files -->

					<link rel="stylesheet" href="css/etalage.css">

					<script src="js/jquery.etalage.min.js"></script>

				<!-- Include the Etalage files -->

				<script>

						jQuery(document).ready(function($){

			

							$('#etalage').etalage({

								thumb_image_width: 300,

								thumb_image_height: 400,

								

								show_hint: true,

								click_callback: function(image_anchor, instance_id){

									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');

								}

							});

							// This is for the dropdown list example:

							$('.dropdownlist').change(function(){

								etalage_show( $(this).find('option:selected').attr('class') );

							});



					});

					

				</script>

				<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10';

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>

				<!----//details-product-slider--->	

</head>

<body>



    

    

    

    

     <div class="main">

      <div class="shop_top">

		<div class="container">

			<div class="row">

                

                

                

                

                

                

                

                

                <?php

include("includes/connect.php");

if(isset($_GET['id'])){

    $page_id=$_GET['id'];

    

    

    

     $select_post="select * from Items  where Item_Id='$page_id'";

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

    $reference_no=$row['Reference_No'];

?> 

				<div class="col-md-9 single_left">

				   <div class="single_image">

					     <ul id="etalage">

							<li>

								<a href="optionallink.html">

									<img class="etalage_thumb_image" src="admin/images/Items/<?php echo $item_image;  ?>" />

									<img class="etalage_source_image" src="admin/images/Items/<?php echo $item_image;  ?>" />

								</a>

							</li>

						</ul>

					    </div>

				        <!-- end product_slider -->

				        <div class="single_right">

				        	<h3><?php echo $item_name ?></h3>

				        	<p class="m_10"><?php echo $item_description ?></p>

				        	

							<div class="btn_form">

							   <form>

                                                         <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#buyModal">Buy Now</button>



<!--

								 <input type="submit" value="buy now" title="">

-->

							  </form>

							</div>

							<!--<ul class="add-to-links">

    			              <li><img src="images/wish.png" alt=""><a href="#">Add to wishlist</a></li>

    			            </ul>-->

							<div class="social_buttons">

								<div class="fb-like" data-href="https://www.facebook.com/Hackmeplz-1413106622056661/?ref=br_rs" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

					        </div>

				        </div>

				        <div class="clear"> </div>

				</div>

				<div class="col-md-3">

				  <div class="box-info-product">

					<p class="price2">Rs.<?php echo $item_price ?></p>

					       <ul class="prosuct-qty">

					<!--			<span>Quantity:</span>

								<select>

									<option>1</option>

									<option>2</option>

									<option>3</option>

									<option>4</option>

									<option>5</option>

									<option>6</option>

								</select>

							</ul>

							<button type="button" name="Submit" class="exclusive" data-toggle="modal" data-target="#myModal">

							   <span>Add to cart</span>

							</button>

                  -->

<!--

                      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add to Cart</button>

-->

                      

				   </div>

			   </div>

                

                <?php } } ?> 

                

                

                

<!--

                cart modal content

-->

                 <div id="myModal" class="modal fade" role="dialog">

  <div class="modal-dialog">



    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Oops</h4>

      </div>

      <div class="modal-body">

        <p>Cart will be available soon</p>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>

    </div>



  </div>

</div>

<!--

        cart modal end        

-->

                

                

                

                

                

                

                

                

                

                

                

                

                

                

                

                

                

                

                

                

                <div id="buyModal" class="modal fade" role="dialog">

  <div class="modal-dialog">



    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Your selection is ready </h4>

      </div>

      <div class="modal-body">


          
           <div class="col-md-6">
        <p>Reference Number: <?php echo $reference_no ?></p><br>
           </div>
                        
                        
                                           <form  id="myform" action="index.php" method="post" enctype="multipart/form-data">
 
                        
           <div class="col-md-6">
               
                <div class="form-group">

      <label for="payment_type">Payment Method:</label>

<select id="heard" class="form-control" required="required" name="payment_type">
                            <option value="">Choose..</option>
                            <option value="eZ cash">eZ cash</option>
                            <option value="Bank Deposit">Bank Deposit</option>
                            <option value="Bank Transfer">Bank transfer</option>
                          </select>
    </div>
               
               
               
                   </div>

          
              
    

       <div class="col-md-6">       

    <div class="form-group">

      <label for="first_name">First Name:</label>

      <input type="text" class="form-control" id="first_name" placeholder="" name="first_name" required>

    </div>

        </div>      

            

                     <div class="col-md-6">       

     <div class="form-group">

      <label for="last_name">Last Name:</label>

      <input type="text" class="form-control" id="last_name" placeholder="" name="last_name" required>

    </div>

                                 </div>      



                                   <div class="col-md-12">       

    <div class="form-group">

      <label for="email">Email:</label>

      <input type="email" class="form-control" id="email" placeholder="" name="email" required>

    </div>

              </div>

                                                 <div class="col-md-12">       

    <div class="form-group">

      <label for="delivery_address">Address to Delivery:</label>

      <input type="text" class="form-control" id="delivery_address" placeholder="" name="delivery_address" required>

    </div>

              </div>

              

                  <div class="col-md-6">       

    <div class="form-group">

      <label for="postal_code">Postal Code:</label>

      <input type="text" class="form-control" id="postal_code" placeholder="" name="postal_code" required>

    </div>

        </div>      

            

                     <div class="col-md-6">       

     <div class="form-group">

      <label for="contact_no">Contact No:</label>

      <input type="text" class="form-control" id="contact_no" placeholder="" name="contact_no" required>

    </div>
                                 </div>
<input type="submit" name="submit" value="Submit">
<!--
         <button type="submit" value="Submit" class="btn btn-default">Submit</button>
-->
         <button type="button" class="btn btn-default" data-dismiss="modal">Clear</button>


     
                                                </form>


      </div>
                                               

    </div>



  </div>

</div>


			</div>		

			

	     </div>

	   </div>

	  </div>

	        

 <?php include ("includes/footer.php"); ?>

  
</body>	

</html>


<?php 

if(isset($_POST['submit'])){
    $to = "chamilamaddumage@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $payment_type = $_POST['payment_type'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $contact_no = $_POST['contact_no'];
    $delivery_address = $_POST['delivery_address'];
    $postal_code = $_POST['postal_code'];
    $subject = "New Order";
    $subject2 = "Confirm Your Order";
    
    
    $message = $first_name . " " . $last_name . " has ordered the following:" . "\n\n" ."Reference No:". $reference_no."\n"."Payment Method:". $payment_type."\n"."Delivery Address:".$delivery_address."\n"."Postal Code:".$postal_code;
    $message2 = "Here is a copy of your order " .$first_name ."\n\n"."Reference No:".$reference_no."\n"."Payment Method:". $payment_type."\n"."Delivery Address:".$delivery_address."\n"."Postal Code:".$postal_code."\n"."Please make your payment within 24 hours"."\n"."Guidelines for make your payment can be derived from this link: https://tresetudara.000webhostapp.com/help.php";


    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name ;
    // You can also use header('Location: thank_you.php'); to redirect to another page.

    }

?>





