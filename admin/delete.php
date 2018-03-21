<?php
include("includes/connect.php");
if(isset($_GET['del'])){
 $delete_id=$_GET['del'];
    
    $delete_query="delete from Items where item_id='$delete_id'";
    if(mysqli_query($connection,$delete_query)){
      echo "<script>alert('POST HAS BEEN DELETED')</script>";
        
        echo "<script>window.open('view_items.php','_self')</script>";
    }


}



?>