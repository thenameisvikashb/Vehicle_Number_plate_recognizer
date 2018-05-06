<?php
    include '../admin/db.php';
    if(isset($_REQUEST['btnsearch'])){
        $vehi=$_REQUEST['vehi'];
        $chal=$_REQUEST['chal'];
        $qry="SELECT * FROM e_challan WHERE vehicleno='".$chal."' OR challanid='".$vehi."'";
        $result= mysqli_query($con, $qry);
        if($result){            
            $row= mysqli_fetch_array($result);
            $_SESSION["vehicle"]=$row["vehicleno"];
            $_SESSION["challan"]=$row["challanid"];
            header("location:challan.php");
        }else{
            
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
                            <table>
                                <tr>
                                    <td>ChallanId:</td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td>Vehicle No.:</td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td>Name:</td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td>Email:</td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td>Mobile:</td>
                                    <td></td>
                                </tr>
                                 <tr>
                                    <td>Fee:</td>
                                    <td></td>
                                </tr>
                                <div class="container-login100-form-btn">
                                            <button class="login100-form-btn" type="submit" name="btnsearch">
							Pay Now
						</button>
					</div>
                            </table>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>