<?php
   require_once("fn_in.php");
   
    $errors = array();
    $message = "";
   if (isset($_POST['submit'])){
       //form was submitted
       $username = trim($_POST["username"]);
       $password = trim($_POST["password"]);
                               $feilds_required = array("username","password");
                               foreach($feilds_required as $field){
                                   $value = trim($_POST[$feild]);      
                               if (!has_presece($value)){
                                  $errors[$field]= ucfirst($field). " : can't be blank";
                                 }
                               }
$feilds_with_max_lengths = array("username"=> 20, "password"=>20);
validate_max_length($fields_with_max_lengths);
                                
if(empty($errors)){       
           if ($username == "preet" && $password == "PREET7049"){
               //successful login
               redirect_to("index.php");
           }
           else{
           redirect_to("404.php");  
           }
        }
   else{
           $username ="";
           $message = "please log in";
       }
   }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
                                       <title>
                                <br /> <br />       Vishal Raut
                                       </title>
        </head>
        <link rel="stylesheet" href="main.css" />
        <body bgcolor="black">
            <div class="m">
            <form action="index.php" method="post">
              <p class="bigb">Welcome! Vishal Raut</p>
              <div class="m">
                 
            <a><label for="username"> username:</label><input type="text" name="username"  value="<?php echo htmlspecialchars($username);?>"/></a><br />
            <a><label for="password"> password:</label><input type="password" name="password"  value=""/></a>
              </div>
              <n><?php echo $message;?><br />
                 <?php echo form_errors($errors); 
                 echo validate_max_length($fields_with_max_lengths); ?> </n>
            <br />
            <br /> 
            <input type="submit" name = "submit" value="submit" /> 
            <br />
            <br /> 
            <h4 class="red">==========If you are not Mr Vishal Raut, Please exit the page.==========</h4>
          </form>
           </div>
        <body>
</html>  
