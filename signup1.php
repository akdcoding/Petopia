<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

	$con='petstore';
	// Connect to the database

		$con = mysqli_connect("localhost","root","",$con);
		if(! $con)
		{
			die('Connection Failed'.mysqli_error());
			
		}
		// Make sure we connected successfully

			if(isset($_POST['register'])){	
			  session_start();
		      $s = "select (max(id)+1) from reg";
			 
			  $result = mysqli_query($con,$s);
			  $row = mysqli_fetch_row($result);
			  
			 
			  
			  
				
				$uname = $_POST['username'];
				$email = $_POST['email'];
				$pass = $_POST['password'];
				$pass1 = $_POST['password1'];
				
		  		if($pass == $pass1){
					
					$s1= "insert into reg values($row[0],'$uname','$pass','$email')";
					
					mysqli_query($con,$s1);
					echo $_SESSION['message']="You are now Registered";
					$_SESSION['username']=$uname;
					
					//header("location: ."); //redirect to home page
			}
				else{
					$_SESSION['message']="Paaswords do not match";
			}
		
			  }
			
  
 
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
              <a class="nav-link js-scroll-trigger" href="index.html#about">About</a>
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
        
       
<div class="container" >
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <form role="form" method="post" action="signup1.php">


          <fieldset>
            <!-- <hr class="colorgraph"> -->
            <div class="form-top">
              <h1>Sign Up...</h1>
            </div>
            <hr class="colorgraph">
            <div class="form-bottom">
              <div class="form-group">
                <label><h4><strong>NAME:</strong></h4></label>
                <div class="form-group">
                              <input type="text" name="username" class="form-control input-lg" placeholder="Enter Name" required="true">
                        </div>
                        
                </div>
				
				<label><h4><strong>EMAIL ID:</strong></h4></label>
                <div class="form-group">            
                            <input type="text" name="email" class="form-control input-lg" placeholder="Enter an email-id" required="true">
                </div>
                <label><h4><strong>PASSWORD:</strong></h4></label>
                <div class="form-group">            
                            <input type="password" name="password" class="form-control input-lg" placeholder="Enter a password" required="true">
                </div>
               <label><h4><strong>Retype PASSWORD:</strong></h4></label>
                <div class="form-group">            
                            <input type="password" name="password1" class="form-control input-lg" placeholder="Enter a password" required="true">
                </div>
                
                
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <center>
                                <input type="submit" name="register" class="btn btn-lg btn-primary btn-block" value="Register!" href="">
                              </center>
                </div>                
              </div>
            </div>
            
          </fieldset>
            
        </form>
      </div>
    </div>
  </div>
        
        
    </body>
</html>
  
