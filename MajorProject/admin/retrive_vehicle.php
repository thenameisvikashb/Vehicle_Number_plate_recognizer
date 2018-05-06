<?php 
    include './db.php';
$qry = "SELECT * FROM vehicle";
$result = mysqli_query($con,$qry);
echo"<table border='1'>";
    echo"<tr>
     <td>Uid</td>
     <td>First name</td>
     <td>Last Name</td>
     <td>Mobile number</td>
     <td>Vehicle number</td>
     <td>Email Id</td>
     <td>Address</td>
     <td>City</td>
     <td>State</td>
     <td>Delete</td>
     <td>Edit</td>
  </tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo"<tr>
     <td>" . $row['uid'] . "</td>
     <td>" . $row['fname'] . "</td>
     <td>" . $row['lname'] . "</td>
     <td>" . $row['mobile'] . "</td>
     <td>" . $row['vehicleno'] . "</td>
     <td>" . $row['email'] . "</td>
    <td>" . $row['address'] . "</td>
     <td>" . $row['city'] . "</td>
     <td>" . $row['state'] . "</td>
     <td><a href='retrive_vehicle.php?id=".$row["uid"]."&status=delete'>Delete</a>
         <td><a href='VehicleNumberRegister.php?id=".$row["uid"]."&status=update'>Update</a></td>
</tr>
 ";
                

    }
    echo '<table>';
    ?>
<!--========= Delete  =========-->

<?php
if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="delete")
{
   $qry="DELETE FROM vehicle WHERE uid=".$_REQUEST["id"];
   echo $qry;
   $result= mysqli_query($con, $qry);
   echo $result;
   if($result)
    {
        ?>
            <script>
                alert("Successfully delete");
            </script>    
        <?php
    }
    else
    {
        echo 'error';
    }
    
    }?>