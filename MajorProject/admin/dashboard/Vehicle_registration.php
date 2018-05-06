<?PHP
    session_start();
    if(isset($_SESSION["admin_name"])&&isset($_SESSION["admin_pass"])){
?>
<!DOCTYPE html>
<html lang="en">
<?php include './db.php';
if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
{
    echo '<title>Update details</title>';
    include'db.php';
$qry="Select * from vehicle WHERE uid=".$_REQUEST["id"];
$result_m= mysqli_query($con, $qry);
$row_m= (mysqli_fetch_array($result_m));
}
?>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Vehicle Register</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Admin
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="search_challan.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Search e-challan</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="Vehicle_registration.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Register Vehicle</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="traffic_rule.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Traffic rules</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="location.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Location</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="logout.php">
                            <i class="nc-icon nc-lock-circle-open"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#"> Search E-Challan </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Register Vehicle</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <?php if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update"){ ?>
                                        <input type="hidden" value="<?php echo $_REQUEST["id"] ?>" name="fid">
                                        <?php } ?>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" placeholder="" value=""name="fname" <?php 
                                                        if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                                                        {
                                                        echo "value='".$row_m["fname"]."'";
                                                        }
                                                        else
                                                        {
                                                            echo"value=''";
                                                        }
                                                        ?>/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" placeholder="" name="lname"<?php 
                                                        if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                                                        {
                                                        echo "value='".$row_m["lname"]."'";
                                                        }
                                                        else
                                                        {
                                                            echo"value=''";
                                                        }
                                                        ?>/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Vehicle No.</label>
                                                    <input type="text" class="form-control" placeholder="" name="txtnumber"<?php 
                                                        if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                                                        {
                                                        echo "value='".$row_m["vehicleno"]."'";
                                                        }
                                                        else
                                                        {
                                                            echo"value=''";
                                                        }
                                                        ?>/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Mobile No.</label>
                                                    <input type="text" class="form-control" placeholder=""name="txtmobile"
                                                    <?php 
                                                         if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                                                         {
                                                         echo "value='".$row_m["mobile"]."'";
                                                         }
                                                         else
                                                         {
                                                             echo"value=''";
                                                         }
                                                         ?>/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>E-mail</label>
                                                    <input type="text" class="form-control" placeholder="" name="txtemail"<?php 
                                                        if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                                                        {
                                                        echo "value='".$row_m["email"]."'";
                                                        }
                                                        else
                                                        {
                                                            echo"value=''";
                                                        }
                                                        ?>/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="" name="txtcity"
                                                    <?php 
                                                         if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                                                         {
                                                         echo "value='".$row_m["city"]."'";
                                                         }
                                                         else
                                                         {
                                                             echo"value=''";
                                                         }
                                                         ?>/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" placeholder="" name="txtstate"
                                                    <?php 
                                                         if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                                                         {
                                                         echo "value='".$row_m["state"]."'";
                                                         }
                                                         else
                                                         {

                                                         }
                                                         ?>/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea name="txtaddress" rows="7" cols="20" class="form-control"name="txtaddress" ><?php 
                                                        if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="update")
                                                        {
                                                        echo "'".$row_m["address"]."'";
                                                        }
                                                        else
                                                        {

                                                        }?>
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <center><button type="submit" name="btnsubmit" class="btn btn-info btn-fill">Save</button></center>
                                        <div class="clearfix" style="padding-bottom: 50px;"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <p class="copyright text-center">
                            <a href="#">Follow the traffic rules</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>
<?php       
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
                        alert("Submited");
                    </script>
                    <?php
            }else{
                ?>
                <script type='text/javascript'>
                var str="<?php echo mysqli_error($con); ?>";  
                var res=str.replace(/'/g,"");

                alert(res);
            </script>
            <?php
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
//      echo $qry;
       $result= mysqli_query($con, $qry);
       if($result){
           ?>
            <script type="text/javascript">
                alert("Data Updated");
            </script>
               <?php
       }else{
           ?>
               <script type='text/javascript'>
                var str="<?php echo mysqli_error($con); ?>";  
                var res=str.replace(/'/g,"");

                alert(res);
            </script>
               <?php
       }
    }
    }else{
        header("location:adminlogin.php");
    }