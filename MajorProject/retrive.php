<?php 

if(isset($_REQUEST["btnsubmit"]))
    {
$number=$_REQUEST["txtid"];
 $con=  mysql_connect("localhost","root","") or die("Sorry!!!Cannot Connect");
        mysql_select_db("number_plate", $con);
$qry = "SELECT * FROM vehicle WHERE uid LIKE '%" . $number . "%'";
$result = mysql_query($qry,$con);
echo"<table border='2'>";
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
  </tr>";
    while ($row = mysql_fetch_array($result)) {
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
     </tr>";
    }
    echo"</table>";

    }?>
