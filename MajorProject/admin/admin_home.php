<!DocType html>
<html lang="en">
<html>
<head>
<title>Bootstarp</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
	
	body
	{
		position:relative;
	}
  
	#section1
	{
		padding:10px;
		padding-top:40px;
		height:500px;
		color:#fff;
		background-color:#f1f1f1;
	}
	#section2
	{
		padding:10px;
		padding-top:40px;
		height:500px;
		color:#000;
		background-color:#f1f1f1;
	}
	#section3
	{
		padding:10px;
		padding-top:40px;
		height:500px;
		color:#fff;
		background-color:#ff9800;
	}
	#section41
	{
		padding:10px;
		padding-top:40px;
		height:500px;
		color:#fff;
		background-color:#00bcd4;
	}
	#section42
	{
		padding:10px;
		padding-top:40px;
		height:500px;
		color:#fff;
		background-color:#009688;
	}
	ul
	{
		position:fixed;
		top:20px;
	}
  </style>
  
</head>
<body data-spy="scroll" data-target="#vikash" data-offset="20">

	<div class="container-fluid">
		<div class="row">
                    <nav class="col-sm-2" id="vikash">
				<ul class="nav nav-pills nav-stacked" >
                                    <li><img src="images/admin.png" height="100"></li>
                                    <li>Welcome Admin</li>
                                    <div class="page-header" style="margin:10px 0 20px"></div>
                                    <li class="active"><a href="#section1">Charts</a></li>
					<li><a href="#section2">Registration</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Options<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#section41">Section 4.1</a></li>
								<li><a href="#section42">Section 4.2</a></li>
							</ul>
					</li>
					<li><a href="#section3">Logout</a></li>
					
				</ul>
			</nav>
			<div class="col-sm-10">
				<div id="section1">
					<h2>Section 1</h2>
					<p>Try to scroll this section and look at the navigation list while scrolling!</p>
				</div>
				<div id="section2">
					<h2>Search challan</h2>
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <label for="ex3">col-xs-4</label>
                                                <input class="form-control" id="ex3" type="text">
                                            </div>
                                            <div class="col-xs-2">
                                                <label style="margin-top: 30px;">Or</label>
                                            </div>
                                            <div class="col-xs-5">
                                                <label for="ex3">col-xs-4</label>
                                                <input class="form-control" id="ex3" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5"></div>
                                            <div class="col-md-2">
                                                <input class="" id="ex3" type="submit">
                                            </div>
                                            <div class="col-md-5"></div>
                                        </div>
				</div>
				<div id="section3">
					<h2>Vehicle registration</h2>
                                        
				</div>
				<div id="section41">
					<h2>Section 4 Subsection 1</h2>
					<p>Try to scroll this section and look at the navigation list while scrolling!</p>
				</div>
				<div id="section42">
					<h2>Section 4 Subsection 2</h2>
					<p>Try to scroll this section and look at the navigation list while scrolling!</p>
				</div>
			</div>
		</div>
	</div>

</body>
</html>