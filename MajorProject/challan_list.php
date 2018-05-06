<!DOCTYPE html>
<html>
<head>
    <title>Challan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="sidenav.css">
<link rel="icon" href="images/traffic.png">
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
a{
    color: #fff;
}
a:hover{
  color: #000;
    text-decoration: none;
    background-color: #ddd;
    padding: 2px;
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
        <table class="table" style="margin-top: 100px;">
            <thead>
                <tr>
                    <th>Challan Number</th>
                    <th>Vehicle Number</th>
                    <th>View Challan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>LMV0000121</td>
                    <td>CG07BA6651</td>
                    <td><a href="e_challan.php?">Click to view</a></td>
                </tr>
                <tr>
                    <td>Vikash</td>
                    <td>Kumar</td>
                    <td>vikashbanjare01@gmail.com</td>
                </tr>
            </tbody>
        </table>
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
  <a href="#contactus" onclick="closeNav()" style="text-decoration: none;">Contact Us</a>
  
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