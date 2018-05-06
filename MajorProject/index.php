<!DOCTYPE html>
<html>
    <head>
        <title>Traffic Cotrol Mechanism</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="sidenav.css">
        <link rel="icon" href="images/traffic.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>        
            .border_curv{
                border-radius: 30px;
            }
            .custom_input{
                background: transparent;
                border:2px solid #9b9da0;
            }
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
            ::placeholder{
                text-align: center;
            }
            input{
                text-align: center;
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
		<li><a href="#home">Home</a></li>
		<li><a href="#aboutus">About Us</a></li>
		<li><a href="#mission">Mission</a></li>
                <li><a href="#analysis">Analysis</a></li>
                <li><a href="#contactus">Contact Us</a></li>
	</ul>
</div>
</div>
</nav>
    <div class="bgimg-4" id="home">
      <div class="caption">
        <form method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-1" style=""></div>
                <div class="col-sm-4" style="">
                    <input type="text" placeholder="Enter the Challan Number" class="form-control input-lg border_curv custom_input" style="color: #fff;" >
                </div>
                <div class="col-sm-2" style="margin-top: 15px;margin-bottom: 15px;">
                    <span class="border" style="border-radius: 15px;">Or</span>
                </div>
                <div class="col-sm-4" style="">
                    <input type="text" placeholder="Enter the Vehicle Number" class="form-control input-lg border_curv custom_input" style="color:#fff;">
                </div>
                <div class="col-sm-1" style=""></div>
            </div>
        </form>
      </div>
    </div>
    
<div id="aboutus">
    <div style="color: #777;background-color:white;text-align:center;padding:30px 50px;text-align: justify;">
      <h3 style="text-align:center;">About Us</h3>
      <p>Parallax scrolling is a web site trend where the background content is moved at a different speed than the foreground content while scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
    </div>
</div>
    <div id="mission">
<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="font-size:25px;color: #f7f7f7;">Mission</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:30px 50px;text-align: justify;">
    <p>Parallax scrolling is a web site trend where the background content is moved at a different speed than the foreground content while scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
  </div>
</div>
    </div>

    <div id="analysis">
<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="font-size:25px;color: #f7f7f7;">Analysis</span>
  </div>
</div>

<div style="position:relative;">
    <div class="container-fluid">
    <div style="color:#ddd;background-color:#282E34;text-align:center;padding-top: 15px;padding-bottom: 15px; text-align: justify;" class="row">
        <div class="col-sm-8">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="" src="chart1.php" style="margin-top: 40px;"></iframe>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row">
                <div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="" src="charts2.php"></iframe>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="" src="chart3.php"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
    </div>
    
    <div id="contactus">
<div class="bgimg-1">
  <div class="caption">
    <span class="border">CONTACT US</span>
  </div>
</div>
<div style="position:relative;">
        <div class="container-fluid"> 
    <div style="color:#ddd;background-color:#282E34;text-align:center;padding-top: 15px;padding-bottom: 15px;text-align: justify;" class="row">
        <div class="col-sm-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d119008.0272256623!2d81.57533088924627!3d21.231814855144986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1straffic+police+station!5e0!3m2!1sen!2sin!4v1525526847976"></iframe>
            </div>
        </div>
        <div class="col-sm-6">
            <div>
                <p><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Janta Colony, Raipur, Chhattisgarh</p>
                <p><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;077142 47119</p>
                <p><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;traffic@control.com</p>
            </div>
            <p>For any query and issue feel free and contact with us...</p>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <div class="row" style="">
                        <div class="col-xs-6"><input type="text" class="form-control col-sm-3" placeholder="Email"></div>
                        <div class="col-xs-6"><input type="text" class="form-control" placeholder="Mobile"></div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Comment"></textarea>
                </div>
                <div style="text-align: right;">
                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;Send Comment</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
    </div>
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
<!--nav end-->
<!--<footer>
        <nav class="navbar navbar-inverse" style="border-radius: 0px;margin-bottom: 0px;">
            <div class="container">
                <div class="row" style="font-family:Gabriola;margin-top:10px;color: #c2c2c2;">
                <div class="col-sm-6" style=""></div>
                <div class="col-sm-3" style="font-size:17px;">
                        <p class="fl_right">CONTACT US :<br>077142 47119</p>
                </div>
                <div class="col-sm-3" style="font-size:17px;">
                    <p class="fl_right">Copyright &copy; :<br><a href="http://www.gecraipur.ac.in" target="_blank" style="color:#E84C3D;">www.gecraipur.ac.in</a></p>
                </div>
                </div>
            </div>
        </nav>
        </footer>-->
</body>
</html>