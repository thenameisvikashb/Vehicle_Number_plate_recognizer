<!DOCTYPE html>
<?php include './db.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $qry_challan_details="SELECT c.challanid,c.doc,c.doe,c.reasonid,c.evidence,e.locationid
                                FROM e_challan e 
                                LEFT JOIN challan c
                                ON e.challanid=e.challanid
            ";
            $result_challan_details=  mysqli_query($con, $qry_challan_details);
            $row_challan_details= mysqli_fetch_array($result_challan_details);
//            echo $row_challan_details["locationid"];
            echo $row_challan_details["challanid"];
            echo $row_challan_details["doc"];
            echo $row_challan_details["doe"];
//            echo $row_challan_details["reasonid"];
            echo $row_challan_details["evidence"];
            
            $qry_reason="SELECT reason,fee FROM reason WHERE reasonid='".$row_challan_details["reasonid"]."'";
            $result_reason= mysqli_query($con, $qry_reason);
            $row_reason=  mysqli_fetch_array($result_reason);
            echo $row_reason["reason"];
            echo $row_reason["fee"];
            
            $qry_location="SELECT place FROM location WHERE locid='".$row_challan_details["locationid"]."'";
            $result_location=  mysqli_query($con, $qry_location);
            $row_loacation=  mysqli_fetch_array($result_location);
            echo $row_loacation["place"];
            $qry_vehicle="SELECT v.fname,v.lname,v.mobile,v.email,v.vehicleno,v.address,v.city,v.state
                        FROM e_challan e
                        LEFT JOIN vehicle v
                        ON e.vehicleno=v.vehicleno
                    ";
            $result_vehicle =  mysqli_query($con, $qry_vehicle);
            $row_vehicle = mysqli_fetch_array($result_vehicle);
            echo $row_vehicle["fname"];
            echo $row_vehicle["lname"];
            echo $row_vehicle["mobile"];
            echo $row_vehicle["email"];
            echo $row_vehicle["vehicleno"];
            echo $row_vehicle["address"];
            echo $row_vehicle["city"];
            echo $row_vehicle["state"];
            
            
        ?>
    </body>
</html>
