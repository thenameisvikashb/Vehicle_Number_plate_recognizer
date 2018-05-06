<!DOCTYPE html>
<html>
<head>
    <title>E-challan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/traffic.png">
<link rel="stylesheet" href="sidenav.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.navbar-default{
    background-color: transparent;
    border: none;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{
    background-color: rgb(244, 107, 66,0.7);
    color: #fff;
}
.navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover{
    background-color: transparent;
}
.container .jumbotron, .container-fluid .jumbotron{
    border-radius: 0px;
}
.proof_anchor{
    color: #ddd;
}
.proof_anchor:hover{
    color: #336699;
    background-color: #eee;
    text-decoration: none;
}
</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="" onclick="openNav()">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
    </button>
</div>
<div class="collapse navbar-collapse" id="myNavbar">	
	<ul class="nav navbar-nav">
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php#aboutus">About Us</a></li>
            <li><a href="index.php#mission">Mission</a></li>
            <li><a href="index.php#analysis">Analysis</a></li>
            <li><a href="index.php#contactus">Contact Us</a></li>
	</ul>
</div>
</div>
</nav>
    
<!--challan list-->
<div class="bgimg-4">
    <div class="container" style="color:#ddd;font-size: 18px;"> 
        <h2 class="text-center jumbotron" style="background-color: rgb(244, 107, 66,0.7);color:#fff;margin-top: 100px;">E-Challan</h2>
        <table class="table" style="">
            <thead>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">Date of challan:05-04-2018</td>
                    <td class="text-center">Date of expire:05-05-2018</td>
                </tr>                
                <tr>                    
                    <td>Challan Number</td>
                    <td>LMV00000121</td>
                </tr>
                <tr>
                    <td>Vehicle Number</td>  
                   <td>CG07BA6651</td>
                </tr>
                <tr>                    
                    <td>Owner of Vehicle</td>
                    <td>Vikash Banjare</td>
                </tr>
                <tr>
                    <td>Mobile Number:&nbsp;&nbsp;&nbsp;&nbsp;8085742314</td>
                    <td>Email id:&nbsp;&nbsp;&nbsp;&nbsp;vikashbanjare01@gmail.com</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>BHARAT NAGAR KUMHARI KUMHARI CHHATTISGARH</td>
                </tr>
                <tr>
                    <td>Reason for Challan</td>
                    <td>Crossed zebra crossing during red traffic signal.</td>
                </tr>
                <tr>
                    <td>Panalty Fee</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>Evidence</td>
                    <td><a href="#" class="proof_anchor">Click to show proof</a></td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-sm-6 text-center">
                <a href="#" class="btn btn-primary btn-lg">Download Challan</a>
            </div>
            <div class="col-sm-6 text-center">
                <a href="#" class="btn btn-danger btn-lg">Pay Now</a>
            </div>
        </div>
    </div>
</div>
<!--challan list end-->
    
<!--    side nav start-->
<div id="mySidenav" class="sidenav" style="z-index: 999999;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="text-decoration: none;">&times;</a>
    <a href="#home" onclick="closeNav()" style="text-decoration: none;">Home</a>
    <a href="#aboutus" onclick="closeNav()" style="text-decoration: none;">About Us</a>
    <a href="#mission" onclick="closeNav()" style="text-decoration: none;">Mission</a>
    <a href="#analysis" onclick="closeNav()" style="text-decoration: none;">Analysis</a>
    <a href="#contactus" onclick="closeNav()" style="text-decoration: none;">Contact Us</a>s  
</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>