




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
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
 
  
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
     
  
   
        
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
        
  
 //echo($name);
  $sql = "Select * from userdetails where uname='$uname'";
  //echo '$sql';
  $result = $conn->query($sql);
  
   if ($result->num_rows > 0)
   {
       echo '<script>
    alert("Username already exists.")
    </script>';
       
       ?>
        <div class="container ">
            
            
            <form id="form" method="post" enctype="multipart/form-data">
                <div name="form1" class="form form-group col-md-6 needs-validation" novalidate>
        <h2> Sign Up</h2>
        <input type="text" placeholder="Name" name="name" class="form-control" required><br>
        
        <div class="col-md-3"> <label for="male ">Male</label> <input type="radio" name="gender" id="male" value="male" checked="true"></div>
        <div class="col-md-3"><label for="female ">Female</label> <input type="radio" name="gender" id="female" value="female"></div><br><br>
        <input type="text" id="datepicker" name="dob" class="form-control" placeholder="Date of Birth"><br><br>
        <input type="text" placeholder="Place of Birth" name="pob" class="form-control" required><br><br>
        <input type="text" placeholder="Phone Number" id="phno" name="phno" class="form-control" required><br><br>
        <input type="text" placeholder="Email" name="email" id="email" class="form-control left"><br><br>
        <textarea name="address" placeholder="Address" class="form-control" required></textarea><br><br>
        <input type="text" placeholder="User Name" name="uname" class="form-control"><br><br>
        <input type="password" placeholder="Password" name="pswd" class="form-control"><br><br>
        
        
  Upload Photo:
  <input type="file" name="imgfile" id="imgfile" class="form-control"> <br>
  
  <input type="submit" value="Submit" name="submit" class="btn btn-primary" id="btn-submit"  >
 


        </div>
            </form>
            
            
            
            
             <script>
            
            
          
             
            
            
           $(document).ready(function() { 
 
   $('#btn-submit').click(function() {  
     $(".error").hide();
    var hasError = false;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
 var a=$("#phno").val();
 
 
 if(isNaN(a))
 {
     $("#phno").after('<span class="error" style="color:red;float:left">Enter a valid Phone Number.</span>');
 hasError = true;
 }
 
 if(a.length>10)
 {
     $("#phno").after('<span class="error" style="color:red;float:left">Enter a valid Phone Number.</span>');
 hasError = true;
 }
    var emailaddressVal = $("#email").val();
    
   if(!emailReg.test(emailaddressVal))
     {
      $("#email").after('<span class="error" style="color:red;float:left">Enter a valid email address.</span>');
      hasError = true;
    }
 
     
    if(hasError == true) { return false; }
 
    });
});
            
            
            </script>
         
            
       
  <?php     
       


}
 else {
     
     
     
     
     $filename=  $_FILES["imgfile"]["name"];
  if ((($_FILES["imgfile"]["type"] == "image/gif")|| ($_FILES["imgfile"]["type"] == "image/jpeg") || ($_FILES["imgfile"]["type"] == "image/png")  || ($_FILES["imgfile"]["type"] == "image/pjpeg")) && ($_FILES["imgfile"]["size"] < 200000))
  {
    if(file_exists($_FILES["imgfile"]["name"]))
    {
      echo "File name exists.";
    }
    else
    {
      move_uploaded_file($_FILES["imgfile"]["tmp_name"],"uploads/$filename");
     // echo "Upload Successful . <a href='uploads/$filename'>Click here</a> to view the uploaded image";
    }
  }
  else
  {
   // echo "invalid file.";
  }

  
   
    
  
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
      $name=$_POST['name'];
      $gender=$_POST['gender'];
      $dob=$_POST['dob'];
      $pob=$_POST['pob'];
      $phno=$_POST['phno'];
      $address=$_POST['address'];
      $email=$_POST['email'];
      $uname=$_POST['uname'];
      $pswd=$_POST['pswd'];        
        $photo="uploads/".$filename;      
  
 //echo($name);
  $sql = "INSERT INTO userdetails (name, gender, dob, pob, phno, address, email, uname, pswd, photo)
VALUES ('$name', '$gender', '$dob', '$pob', '$phno', '$address', '$email', '$uname', '$pswd','$photo')";
  //echo '$sql';
  
  
  if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
      ?>
      
        <div class="container loginfrm">
            <div class="jumbotron">
                  <br><center><h2> Welcome to the Auton family. Please <a href="login.php">Login</a></h2></center><br><br>
            </div>
        </div>
      
 <?php     
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header("Location: signup.php");
  
  
  
}

$conn->close();

  
  
  }
  
  
 
     
     
     
     
     
     }
 }
 else {
     

        ?>
        
        
        
        
        
        
        
        
        
        <div class="container ">
            
            
            <form id="form" method="post" enctype="multipart/form-data">
                <div name="form1" class="form form-group col-md-6 needs-validation" novalidate>
        <h2> Sign Up</h2>
        <input type="text" placeholder="Name" name="name" class="form-control" required><br>
        
        <div class="col-md-3"> <label for="male ">Male</label> <input type="radio" name="gender" id="male" value="male" checked="true"></div>
        <div class="col-md-3"><label for="female ">Female</label> <input type="radio" name="gender" id="female" value="female"></div><br><br>
        <input type="text" id="datepicker" name="dob" class="form-control" placeholder="Date of Birth">
        
        <br><br>
        <input type="text" placeholder="Place of Birth" name="pob" class="form-control" required><br><br>
        <input type="text" placeholder="Phone Number" id="phno" name="phno" class="form-control" required><br><br>
        <input type="text" placeholder="Email" name="email" id="email" class="form-control left"><br><br>
        <textarea name="address" placeholder="Address" class="form-control" required></textarea><br><br>
        <input type="text" placeholder="User Name" name="uname" class="form-control"><br><br>
        <input type="password" placeholder="Password" name="pswd" class="form-control"><br><br>
        
        
  Upload Photo:
  <input type="file" name="imgfile" id="imgfile" class="form-control"> <br>
  
  <input type="submit" value="Submit" name="submit" class="btn btn-primary" id="btn-submit"  >
 


        </div>
            </form>
            
            
            
            
             <script>
            
            
          
             
            
            
           $(document).ready(function() { 
 
   $('#btn-submit').click(function() {  
     $(".error").hide();
    var hasError = false;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
 var a=$("#phno").val();
 
 
 if(isNaN(a))
 {
     $("#phno").after('<span class="error" style="color:red;float:left">Enter a valid Phone Number.</span>');
 hasError = true;
 }
 
 if(a.length>10)
 {
     $("#phno").after('<span class="error" style="color:red;float:left">Enter a valid Phone Number.</span>');
 hasError = true;
 }
    var emailaddressVal = $("#email").val();
    
   if(!emailReg.test(emailaddressVal))
     {
      $("#email").after('<span class="error" style="color:red;float:left">Enter a valid email address.</span>');
      hasError = true;
    }
 
     
    if(hasError == true) { return false; }
 
    });
});
            
            
            </script>
         
            
            
            
            
            
              
              
  <?php                     
            
 

}

?>

            
            
            </div>     
        
        
        
        <footer>
            
            <div class="index">
                
                <center> Copyright @ Lifestore. All Rights Reserved | Contact Us: +919000000000</center>
                
            </div>
            
        </footer>
    

</body>
</html>

