<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>About</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
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
     <!-- Add fancyBox main JS and CSS files -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
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
</head>
<body>
		


	    	  <?php include ("includes/headersubpages.php"); ?>

    
    
    
    
     <div class="main">
      <div class="shop_top">
		<div class="container">
		
			<div class="row">
				<div class="col-md-4 team_bottom">
				  <ul class="team_list">
					<h4 style="color:#000;font-weight:bold;font-size:2em;">SRI LANKAS’ 1st and best backovers and phone cases selling site.</h4>
		            <li><a href="#" style="color:#000;font-weight:bold;font-size:1em;">Convenience.</a></li>
		             <li><a href="#" style="color:#000;font-weight:bold;font-size:1em;">Better prices.</a></li>
		            <li><a href="#" style="color:#000;font-weight:bold;font-size:1em;">More variety.</a></li>
		             <li><a href="#" style="color:#000;font-weight:bold;font-size:1em;">More payment methods.</a></li>
					 <li><a href="#" style="color:#000;font-weight:bold;font-size:1em;"> Save Time.</a></li>
					 <li><a href="#" style="color:#000;font-weight:bold;font-size:1em;">No crowds.</a></li>
		          </ul>
				</div>
				<div class="col-md-8">
					<ul class="team_list">
					 <h4 style="color:#000;font-weight:bold;">www.BackCovers.lk</h4>
					 <p style="color:#000;font-weight:600;text-indent:5em;font-size:1em;"class="m_7">Backcovers.lk is the SRI LANKAS’ 1st and best backovers and phone cases selling site. Using premium materials and decadent styles, the covers we’ve created for the latest cell phones epitomize luxury designed to turn your technology into a chic accessory. From pebbled leather and genuine crystals to metal accents and subtle pearls, we take pride in being on the forefront of fashionable smartphone covers.</p><p style="color:#000;font-weight:600;text-indent:7em;font-size:1em;"class="m_7">

In addition to being trendy, Backcovers.lk has ensured each case is sturdy in order to maximize protection for your phone. Whether it comes equipped with shock absorbing layers, dual layer protection, or a flexible hard shell, each case has been designed specifically to withstand the bumps, drops and knocks of life. Some cases have even been designated as military strength, which means the cases were able to withstand being dropped from varying heights on to a variety of surfaces and maintain the integrity of the phone. And if you do find yourself needing a replacement, our dedicated customer service team is available to help!</p>
		             <img src="images/logo1.jpg" class="img-responsive" alt=""/>
		          </ul>
				</div>
			</div>
		</div>
	   </div>
	  </div>
	      <?php include ("includes/footer.php"); ?>

</body>	
</html>