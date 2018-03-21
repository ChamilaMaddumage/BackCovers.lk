<?php
include("includes/connect.php");

if($_POST){

$name = $_POST["Name"] ;
$email = $_POST["Email"];
$subject = $_POST["Subject"];
$message = $_POST["Message"];

/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "*All Fields are required";
		break;
		}
	}
	
/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "*Invalid Email Address";
		}
	}

if(!isset($error_message)){
$mysqli_query = "insert into 'Contact_Messages' (`Name`, `Email`, `Subject`, `Message`)values('$name','$email','$subject','$message');";


if(mysqli_query($connection,$mysqli_query)) {
	$success_message = "*Your Message sent successfully";
	}
$connection->close();
}}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Contact Us</title>
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
			<div class="row">
				<div class="col-md-7">
				  <div class="map">
					<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small>
				  </div>
				</div>
				<div class="col-md-5">
                    <h3><b>Contact Us</b></h3>
                    
					<!--<p class="m_8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>-->
					<div class="address">
				                <p>458/7/1,</p>
						   		<p>Madawala Road</p>
						   		<p>Palawaththa</p>
								<p>Pannipitiya</p>
				   		<p>Phone: 077 7 262 721</p>
				   		<p>Follow on: <div class="fb-like" data-href="https://www.facebook.com/Hackmeplz-1413106622056661/?ref=br_rs" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div></p>
				   </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 contact">
				  <form method="post" action="contact.php">
					<div class="to">
                     	<input type="text" class="text" placeholder="Name" name="Name" required >
					 	<input type="text" class="text" placeholder="Email" name="Email">
					 	<input type="text" class="text" placeholder="Subject" name="Subject">
					</div>
					<div class="text">
	                   <textarea placeholder="Message:" name="Message" type="text" ></textarea>
	                   <div class="form-submit">
			           <input name="submit" type="submit" id="submit" value="Submit"><br>
			           </div>
	                </div><?php if(!empty($success_message)) { ?>	
<div class="success-message" style="color:red;font-size:20px;"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message" style="color:red;font-size:20px;"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
					
	                <div class="clear"></div>
                   </form>
				   <div>
				  
</div>
			     </div>
		    </div>
	     </div>
	   </div>
	  </div>

    
        <?php include ("includes/footer.php"); ?>

    
    
    
</body>	
</html>