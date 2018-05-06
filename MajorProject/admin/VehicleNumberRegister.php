<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
          <?php
if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
{
    echo '<title>Update details</title>';
    include'db.php';
$qry="Select * from vehicle WHERE uid=".$_REQUEST["id"];
$result_m= mysqli_query($con, $qry);
$row_m= (mysqli_fetch_array($result_m));
}
else {
    echo '<title> Vehicle Number Registration</title>';
}
    ?>
    </head>
    <body>
        <form action ="VehicleNumberRegister.php" method="post" enctype="multipart/form-data">
            <h1 style="text-align: center">
                Vehicle Number Registration
                <h1>
                    <center> 
                        <table border="1">
                            <input type="hidden" value="<?php echo $_REQUEST["id"] ?>" name="fid">
                        <tr>
                            <td>First Name:</td>
                            <td> <input type="text" name="fname" <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                {
                echo "value='".$row_m["fname"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>/></td>
                        </tr>
                        <tr>
                            <td>Last Name:</td>
                            <td> <input type="text" name="lname"<?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                {
                echo "value='".$row_m["lname"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>/></td>
                        </tr>
                        <tr>
                            <td>Vehicle Number:</td>
                             <td><input type="text" name="txtnumber"
                                        <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                {
                echo "value='".$row_m["vehicleno"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>/></td>
                        </tr>
                        <tr>
                            <td>Mobile number:</td>
                            <td><input type="text" name="txtmobile"
                                       <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                {
                echo "value='".$row_m["mobile"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>/> </td>
                        </tr><tr>
                            <td>Email:</td>
                            <td><input type="email" name="txtemail"<?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                {
                echo "value='".$row_m["email"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>/></td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td> <textarea name="txtaddress" ><?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                {
                echo "'".$row_m["address"]."'";
                }
                else
                {
                  
                }?></textarea></td>
                        </tr>
                        <tr>
                            <td>City:</td>
                            <td><input type="text" name="txtcity"
                                       <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                {
                echo "value='".$row_m["city"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>/></td>
                        </tr>
                        <tr>
                            <td>State:</td>
                            <td><input type="text" name="txtstate"
                                       <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                {
                echo "value='".$row_m["state"]."'";
                }
                else
                {
              
                }
                ?>/></td>
                        </tr>
                        <tr>
                              <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                {
                echo '<input type="submit" name="update" value="update" />';
                }
                else
                {
                    echo'<input type="submit" name="btnsubmit" />';
                }
                ?>
                  </tr>
                        
            </table></center>
        </form>
    </body>
</html>

<?php        
require_once 'db.php';
           
if(isset($_REQUEST["btnsubmit"]))
    {
            $fame=$_REQUEST["fname"];
            $lname=$_REQUEST["lname"];
            $number=$_REQUEST["txtnumber"];
            $address=$_REQUEST["txtaddress"];
            $email=$_REQUEST["txtemail"];
            $mobile=$_REQUEST["txtmobile"];
            $state=$_REQUEST["txtstate"];
            $city=$_REQUEST["txtcity"];
           
 $qry="INSERT INTO vehicle (fname,lname,mobile,email,vehicleno,address,state,city) 
            VALUES('".$fame."','".$lname."','".$mobile."','".$email."','".$number."','".$address."','".$state."','".$city."');
                   
                ";
 if(mysqli_query($con, $qry)){
     ?>
<script type="text/javascript">
    alert('Submitted');
   window.location.href="VehicleNumberRegister.php";
         <?php
 }else{
     echo "Error";
 }
 }?>

<?php        
require_once 'db.php';
if(isset($_REQUEST["update"]))
    {
            $id=$_REQUEST["fid"];
            $fame=$_REQUEST["fname"];
            $lname=$_REQUEST["lname"];
            $number=$_REQUEST["txtnumber"];
            $address=$_REQUEST["txtaddress"];
            $email=$_REQUEST["txtemail"];
            $mobile=$_REQUEST["txtmobile"];
            $state=$_REQUEST["txtstate"];
            $city=$_REQUEST["txtcity"];
            $qry="UPDATE vehicle SET     
                fname='".$fame."',lname='".$lname."',mobile='".$mobile."',email='".$email."',vehicleno='".$number."',address='".$address."',city='".$city."',state='".$state."'
                WHERE uid=".$id;
//       echo $qry;
       $result= mysqli_query($con, $qry);
    if($result)
    {
        ?>
            <script>
                alert("Successfully updated your Data");
            </script>    
        <?php
    }
    else{
        ?>
            
 
            <script type='text/javascript'>
    var str="<?php echo mysqli_error($con); ?>";  
    var res=str.replace(/'/g,"");
    
    alert(res);
            </script>
            <?php
    }

}