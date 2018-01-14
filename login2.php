<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

//$mysqli = new mysqli('localhost',)
// Grab User submitted information
$con='petstore';
// Connect to the database
$con = mysqli_connect("localhost","root","",$con);
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysqli_error());
}
$uname = $_POST['username'];
$pass = $_POST['password'];





$query="SELECT username, password FROM reg WHERE password='$pass'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_row($result);

if($row[0]==$uname && $row[1]==$pass)
{session_start();
echo "welcome";
}
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>
<html>
    <head>
        <title>CLASSES | LOGIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/5ceac9acce.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
       <!-- <link rel="stylesheet" href="responsive.css" media="screen and (max-width:900px)">-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round"/>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
		
		<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
	
        <style>
            
            .btn{
                  font-size:20px;
                  margin-top:5.5px;
                  border: none;
                  color:white;
                  margin-bottom: 5px;
                  font-size:15px;
                  height: 45px;
                  background: dimgrey;
                  border-radius: 5px;                              
                                            } 
			.form-control {
    font-size:20px;
}
			
    
    
                
 </style>
    </head>
    <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
      <div class="container">
		
        <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="img\logo.jpg" style="height:50px;width:70px;margin-right:20px;border-radius:50px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#about">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login2.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="store.html">Store</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="notice.html">Notices</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>            
            
                
<div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <form role="form" method="post" action="login2.php">
                    
                    <fieldset>
                        <!-- <hr class="colorgraph"> -->
                        <div class="form-top">
                            <h1>Login...</h1>
                        </div>
                        <hr class="colorgraph">
                        <div class="form-bottom">
                            <label><h4><strong>ID:</strong> (required)</h4></label>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control input-lg" placeholder="eg: " required="true">
                            </div>
                            
                            <label><h4><strong>PASSWORD:</strong> (required)</h4></label>
                            <div class="form-group">                        
                                <input type="password" name="password" class="form-control input-lg" placeholder="eg: Class@123" required="true">
                            </div>
                            
                            <!-- <span class="button-checkbox">
                                <button type="button" class="btn btn-primary">Forgot Password?</button>
                            </span> -->
                            
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="Login!" action="login2.php"></a>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <a href="forgot.php" name="fp" class="btn btn-lg btn-danger btn-block">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                        <!-- <hr class="colorgraph"> -->
                        <!-- <span class="button-checkbox">
                            <button type="button" class="btn btn-primary pull-right">Forgot Password?</button>
                        </span> -->
                    </fieldset>
                        <hr class="colorgraph">
                        </form>
                        <div class="form-outside">
                            <center>
                                <h3>...or Sign Up:</h3>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <a href="signup1.php"><input type="submit" name="su" class="btn btn-lg btn-primary" value="Sign Up Now!"></a>
                                    </div>
                                </div>
                            </center>
                        </div>
            </div>
        </div>
    </div>

       
        

        
    </body>
</html>
  