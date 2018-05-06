<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php
if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
{
    echo '<title>Update Reason</title>';
    include'db.php';
$qry="Select * from reason WHERE reasonid=".$_REQUEST["id"];
$result_m= mysqli_query($con, $qry);
$row_m= (mysqli_fetch_array($result_m));
}
else {
    echo '<title>Entry Reason </title>';
}
    ?>
    </head>
    <body>
        <form action ="reason.php" method="post" enctype="multipart/form-data">
            <h1 style="text-align: center">
                Reason input
                <h1>
                    <center> 
                        <table border="1">
                            <input type="hidden" value="<?php echo $_REQUEST["id"] ?>" name="fid">
                        <tr>
                            <td>Reason: </td>
                            <td> <textarea name="txtreason">
                                <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                {
                echo "'".$row_m["reason"]."'";
                }
                else
                {
                   
                }?>
                                </textarea></td>
                        </tr>
                        <tr>
                            <td>Fees:</td>
                            <td> <input type="text" name="txtfee"
                                        <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                {
                echo "value='".$row_m["fee"]."'";
                }
                else
                {
                    echo"value=''";
                }?>/></td>
                        </tr>
                        <tr>
                               <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                {
                echo '<input type="submit" name="update" value="update" />';
                }
                else
                {
                    echo'<input type="submit" name="save"  value="SAVE"/>';
                }
                ?>
                        </tr>
                        
                        
                        </table></center>
                     
                  
        </form>
    </body>
</html>
<?php        
require_once 'db.php';
if(isset($_REQUEST["update"]))
    { $id=$_REQUEST["fid"];
            $fame=$_REQUEST["txtreason"];
              $fee=$_REQUEST["txtfee"];
            $qry="UPDATE reason SET     
               reason='".$fame."',fee='".$fee."'
                WHERE reasonid=".$id;
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


?>
<?php        
require_once 'db.php';
           
if(isset($_REQUEST["save"]))
    {
            $fame=$_REQUEST["txtreason"];
              $fee=$_REQUEST["txtfee"];
           
 $qry="INSERT INTO reason (reason,fee) 
            VALUES('".$fame."','".$fee."');
                   
                ";
 if(mysqli_query($con, $qry)){
     ?>
<script type="text/javascript">
    alert('Submitted');
   window.location.href="VehicleNumberRegistration.html";
         <?php
 }else{
     echo "Error";
 }
 }?>
