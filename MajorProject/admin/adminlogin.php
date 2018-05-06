<?php session_start();
    ini_set('error_reporting', 0);
    ini_set('display_errors', 0);
 include 'db.php';
 
 if(isset($_REQUEST["btnlogin"]))
 {
     $name=$_REQUEST["txtuser"];
     $pass= $_REQUEST["txtpass"];
     $sql="SELECT * FROM admin where uid='".$name."' and  password='".$pass."' ";
     $result= mysqli_query($con,$sql);
         $row=  mysqli_fetch_array($result);
         if (mysqli_affected_rows($con)>0)
         {
                $_SESSION["admin_name"]=$name;
                $_SESSION["admin_pass"]=$pass;
                header("Location:VehicleNumberRegister.html");
             
         }
    else
 {
  ?>
    <script>
        alert('Invalid Username and password!!!');
    </script>
  <?php
 }
 }
 
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login page</title>    
        
        <link rel="icon" href="images/bulb_logo.png" >
        
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link href="../style.css" rel="stylesheet" type="text/css" media="all">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <script src="../script.js"></script>
    </head>
    <body style="background-color: #474747">
        <center>
            <img src="../images/bulb_logo.png" class="img-responsive" style="max-height: 250px;margin-bottom: -50px;margin-top: 50px;"/>
        </center>
        <form method="POST" enctype="multipart/form-data">
        <div class="container-fluid">
             <div>
                 <div class="row" style="margin-top: 100px;">
                    
               <div class="col-sm-3">
                   <div class="form-group" style="background-color: #90bb4f;padding: 70px;border-radius: 4px;">
                       <input type="text" class="form-control" id="user" placeholder="Enter admin id" name="txtuser" required>
                   </div>
               </div>
               <div class="col-sm-3">       
                   <div class="form-group" style="background-color: #f5c147;padding: 70px;border-radius: 4px;">
                       <input type="password" class="form-control" id="pass" placeholder="Enter password" name="txtpass" required>
                   </div>
                </div>
                <div class="col-sm-3 text-center">                         
	        <div class="form-group">
                    <button class="btn" type="submit" name="btnlogin" style="background-color: #38bec9;padding: 60px;border-radius: 4px;padding-right: 120px;padding-left: 120px;"><p style="color:#fff;font-size: 30px;">Login</p></button>
		</div>                         
               </div>
                </div>
               </div>
                    </div>
               </div>
    </form>
		
           
    </body>
</html>
 <?php
 ?>