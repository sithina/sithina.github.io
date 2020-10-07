
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
    
    <body>

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
        <br><br>

        
 <?php       
        
$servername = "localhost";
$username = "root";
$password = "";
$db="camerastore";

// Create connection
$conn = new mysqli($servername, $username, $password, $db );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
  if (isset($_POST['submit']))
  {
      $uname=$_POST['uname'];
      $pswd=$_POST['pswd'];
      
      
  $sql = "select name, gender, dob, pob, phno, address, email, photo from userdetails where uname='$uname' and pswd='$pswd'";
  //echo ($sql);
  
  $result = $conn->query($sql);
  
   if ($result->num_rows > 0)
       {
        //echo 'gfhfgh';
       
        while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
           
            //echo 'gghghj';
            ?>
<div class="container loginfrm1"> 
    <form class="form-group">
    <h3>Account Details:</h3><br><br><br>
    <div><img src="<?php echo $row["photo"]?>" class="image1"></div>
    <div class="col-sm-3"> Name         :  </div> <div class="col-sm-offset-4"> <?php   echo $row["name"]; ?> </div><br><br>
    
    <div class="col-sm-3"> Date of Birth  :  </div> <div class="col-sm-offset-4"> <?php   echo $row["dob"]; ?> </div> <br><br>
    <div class="col-sm-3">  Phone Number   :  </div><div class="col-sm-offset-4">  <?php   echo $row["phno"]; ?> </div> <br><br>
    <div class="col-sm-3">Email          :    </div><div class="col-sm-offset-4"><?php   echo $row["email"]; ?> </div> <br><br>
    <div class="col-sm-3">Address         :    </div><div class="col-sm-offset-4"><?php   echo $row["address"]; ?> </div> <br><br>
    </form>
</div>      
            
            
<?php            
            
   }
   }
 else 
 {
    

     ?>
     
     <div class="container loginfrm">
            <div class="jumbotron">
                <br><center><h2> Sorry, we can't find your profile, please <a href="signup.php">Register</a> yourself.</h2></center><br><br>
            </div>
        </div>
     
    <?php  
 //header("Location: login.php");
 // exit();
 }
  //echo "New record created successfully";


       
  
  
  $conn->close();

   }
  
 ?>

        
        <footer>
            
            <div class="index">
                
                <center> Copyright @ Lifestore. All Rights Reserved | Contact Us: +919000000000</center>
                
            </div>
            
        </footer>
       

</body></html>


