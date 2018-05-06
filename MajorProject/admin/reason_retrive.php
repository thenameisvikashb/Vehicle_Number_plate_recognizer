<?php 
    include './db.php';
$qry = "SELECT * FROM reason";
$result = mysqli_query($con,$qry);
echo"<table border='1'>";
    echo"<tr>
     <td>reason id</td>
     <td>Reason:</td>
     <td>Fees</td>
     <td>Delete</td>
     <td>Edit</td>
  </tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo"<tr>
    <td>" . $row['reasonid'] . "</td>
     <td>" . $row['reason'] . "</td>
     <td>" . $row['fee'] . "</td>
     <td><a href='reason_retrive.php?id=".$row["reasonid"]."&status=delete'>Delete</a>
         <td><a href='reason.php?id=".$row["reasonid"]."&status=update'>Update</a></td>
</tr>
 ";
                

    }
    echo '<table>';
    ?>
<!--========= Delete  =========-->

<?php
if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="delete")
{
   $qry="DELETE FROM reason WHERE reasonid=".$_REQUEST["id"];
   //echo $qry;
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