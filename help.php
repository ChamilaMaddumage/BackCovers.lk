<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Guide</title>
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
	 <div id="fb-root"></div>

 </head>
<body>
    	  <?php include ("includes/headersubpages.php"); ?>

    
    
    <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="col-md-6">
				 <div class="login-page">
					<ul type="none">
					<li><h3 style="color:#000;font-weight:bold;">1. Select the Item</h3><p style="text-indent:5em;color:#000;font-weight:500">First select the item you want to purchase.
All the item has a specific reference number which you have to use when placing the order.
You have to make sure that you enter the reference number when you paying through any payment method.</P><br>
</li>
					<li><h3 style="color:#000;font-weight:bold;">2. Make Your Payments</h3><p style="text-indent:5em;color:#000;font-weight:500">Once you placed the order, you have to make payment within 24 hours through a following options.</p><br>
					<ul type="none">
					<li><h4 style="color:#000;font-weight:bold;">a. Bank deposit or bank transfers</h4><p style="text-indent:5em;color:#000;font-weight:500">If you made payment via bank, you should mention the 4-digit reference number of respective item on the bank slip. After the payment make sure to send the copy of bank slip through whatsapp, viber or email. 0777262721 / backcovers.lk@gmail.com Even in the bank transfers you should mention the respective reference number of the item.
</p></li></br>
<li><h4 style="color:#000;font-weight:bold;">b. eZ cash</h4><p style="text-indent:5em;color:#000;font-weight:500">You have to pay full amount via eZ cash to 0777 262721 .Dont forget to include the 4-digit reference number of the item.</p></li>
					</ul>
					</li>
					
					</ul>
					
				  </div>
				  
				  
				</div>
				<div class="col-md-6">
				 <div class="login-title">
	           		<ul type="1">
					<br><br>
						<li><h4 style="color:#000;font-weight:bold;">We will contract you immediately after your purchase request(order).</h4></li><br><br><br>
						<li><h4 style="color:#000;font-weight:bold;">Any complaints about purchase can be conveyed through “Contact us" or where we will contact you within one week from delivery, you can make suggestions on any other complaints. </h4><br><br><br></li> 
						<li><h4 style="color:#000;font-weight:bold;">As we are determined to maximize your satisfaction, we will provide you with a new item or will refund you the money if you dissatisfy with our product. </h4><br><br><br><br><img src="images/logo1.jpg" class="img-responsive" alt=""/></li>
			      </div>
				 <div class="clear"></div>
			  </div>
			</div>
		  </div>
	  </div>
	     <?php include ("includes/footer.php"); ?>

</body>	
</html>