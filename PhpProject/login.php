

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
        <link href="CSS/index.css" rel="stylesheet" type="text/css">
        <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    
    <body class="bckimg">
        
         <div class="navht">
        <nav class="navbar navbar-inverse navbar-fixed-top navht">
            <div class="logo">  <a class="navbar-brand" href="index.php"><img src="img/logo2.png" class="logo" alt="Logo"></a></div>
            <div class="container" >
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                
                    
                </div>
                <div class="collapse navbar-collapse navcol" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                    </ul>
                </div>
                
            </div>
        </nav>
        </div>
        </div>
        <br><br><br><br>
        
        
        <div class="container loginfrm">
        
        
            <form id="form" action="userdetails.php" method="post" enctype="multipart/form-data">
            <div class="col-md-5 col-md-offset-3">
            <div class="panel panel-info">
                <div class="panel-heading "><div class="panel-title"><b>Login </b></div></div>
                <div class="panel-body">
                    <br><br>
<input type="text" placeholder="Username" name="uname" class="form-control" required><br><br>
<input type="password" placeholder="Password" name="pswd" class="form-control" required><br><br>

<input type="submit" value="Login" name="submit" class="btn btn-primary" id="submit">
                </div>
                <div class="panel-footer">
                    Don't have an account? <a href="signup.php">Register</a>
                </div>
            </div>
            </div>
        </form> 
        
        
        
        </div>
        
        
        <footer>  
            <div class="index ">
                
                <center> Copyright @ Lifestore. All Rights Reserved | Contact Us: +919000000000</center>
                
            </div>
        </footer>
</body>

        </html>





<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
