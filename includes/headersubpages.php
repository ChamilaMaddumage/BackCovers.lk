<style>


.dropdown {
    float: right;
    position: relative;
    display: inline-block;
    
}

.dropdown-content {
	font-family: "Helvetica", sans-serif;
	padding: 2px 5px;
	font-size:1em;
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 100px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    right: 0;
    z-index: 2;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>









<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12 col-sm-24">
					 <div class="logo">
						<a href="index.php"><img class="mylogo" src="images/logo1.jpg" alt=""/></a>
					 </div>
					 
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="index.php">home</a></li>
						    	<li><a href="about.php">about</a></li>
                                								<li><a href="help.php">Guide</a></li>

						    	<li><a href="appleshop.php">apple</a></li>
						    	<li><a href="samsungshop.php">samsung</a></li>
						    	<li><a href="huaweishop.php">huawei</a></li>
								<li><a href="sonyshop.php" >sony</a></li>	
                                <li><a href="nokiashop.php">nokia</a></li>	
								<li>
<a onmouseover="myFunction()" class="dropbtn">Other<i class="fa fa-caret-down"></i></a>
  <div id="myDropdown" class="dropdown-content">
    <a href="othershop.php">Covers</a>
    <a href="otherprotectorshop.php">Protectors</a>
   
  </div>
 </li>
                                <li><a href="contact.php">Contact us</a></li>
                                <!--<li ><a href="#"><img width="40px" height="40px" src="images/cart.png"/></a></li>-->

								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	      </div>
		 </div>
	    </div>
	</div>