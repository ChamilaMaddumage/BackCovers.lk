<?php
  session_start();
     
     ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LOGIN </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body style="background:#F7F7F7;">
    <div class="">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>

      <div id="wrapper">
        <div id="login" class=" form">
          <section class="login_content">
            <form method="post" action="login.php">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="required" name="user_name" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="user_password" />
              </div>
              <div>
                  <input type="submit" name="login" value="LOGIN" />
                <!--<a class="btn btn-default submit" href="index.html">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>-->
              </div>
              <div class="clearfix"></div>
              <div class="separator">

                
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i  style="font-size: 26px;"></i>BackCovers.lk</h1>

                  <p>©2017 All Rights Reserved. </p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <!--<div id="register" class=" form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>
              <div class="clearfix"></div>
              <div class="separator">

                <p class="change_link">Already a member ?
                  <a href="#tologin" class="to_register"> Log in </a>
                </p>
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                  <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>-->
      </div>
    </div>
  </body>
</html>

<?php
include("includes/connect.php");
if(isset($_POST['login'])){
    
   $user_name =$_POST['user_name'];
   $password=$_POST['user_password'];
   
   /* $admin_query="select * from Users where User_Name='$user_name' AND Password='$password'";
    $run=mysqli_query($connection,$admin_query);*/
    
    /*if(mysqli_num_rows($run)>0){*/
    if($user_name=="Chamila" && $password=="Welcome#1"){
      $_SESSION['user_name']=$user_name;
        echo "<script>window.open('index.php','_self')</script>";
    }else{
     echo "<script>alert('username or password is incorrect')</script>";
    }
  
    
 
    
    
}





?>