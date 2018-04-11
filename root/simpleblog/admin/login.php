<?php
//include config
require_once('../includes/config.php');


//check if already logged in
if( $user->is_logged_in() ){ header('Location: index.php'); } 
?>
<!doctype html>
<html lang="en">
<head>	
  <meta charset="utf-8">
  <title style="text-align:center">Admin Login</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/main.css">
  <style>
  	body{
  		background: url(../images/lion.jpg);
  		width: 100%;
  		height: 100%;

  	}
  </style>
</head>
<body>
 <h1 style="text-align: center">Welcome</h1>
<p style="text-align: center">Enter Your Username and Password</p>
<div id="login">

    <?php

    //process login form if submitted
    if(isset($_POST['submit'])){

           
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        if($user->login($username,$password)){ 

            //logged in return to index page
            header('Location: index.php');
            exit;
        

        } else {
            $message = '<p class="error">Wrong username or password</p>';
        }

    }//end if submit

    if(isset($message)){ echo $message; }
    ?>
   


	
  <form action="" method="post">
    <p><label>Username</label><input type="text" name="username" value=""  /></p>
    <p><label>Password</label><input type="password" name="password" value=""  /></p>
    <p><label></label><input type="submit" name="submit" value="Login"  /></p>
    </form>

</div>
</div>
</body>
</html>