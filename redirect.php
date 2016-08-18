<?php
 //this is how you redirect to new page
 function redirect_to($new_location){
 header("Location: ".$new_location);
 exit;
 }
 $logged_in = $_GET['logged_in']; #we can set the value of $_GET by typing ?logged_in=1
 if ($logged_in == "1"){
     redirect_to("index.php");
 }else {
     redirect_to("404.php");
 }
 ?>