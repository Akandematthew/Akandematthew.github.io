<!DOCTYPE html>

<?php

$link= mysqli_connect("localhost","root","","profile");
	if (isset($_POST['submit'])){
		
$query="INSERT INTO `comment table` (`id`, `name`, `Email`, `message`) VALUES (NULL, '$_POST[name]', '$_POST[email]', '$_POST[message]');";

$result=mysqli_query($link,$query);
if ($result) {
	# code...
	echo "success";
}

		
	}




?>


<html>
<!-- Head section of the  website-->
<head>
	<title>Homepage</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="Matthew.css">
	<link rel="icon" type="img/ico" href="z.png">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script src="/scripts/jquery.min.js"></script>

	<!-- Start WOWSlider.com HEAD section --> 
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- end wow slider head section-->

</head>
<body>
	<!-- let the magic begins-->
<header>
	<!-- Navigation section of the website-->
	<nav class="navbar navbar-expand-md bg-white border-bottom">
        <a class="navbar-brand" href="#">
            <img src="matthew logo.jpg" alt="logo" width="45" height="45">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active text-primary" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tracks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Members</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Support</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Navigaation ends-->
	
<!-- container 1-->
<div class="container-fluid container1 content-center"  >
	<div class="row">
		<div col-md-6 style="margin-left: 450px ; margin-top: 0px">
			<img src="IMG-20190719-WA0062.jpg" >
		</div>
	</div>
</div>
<div class="container container2">
	<div class="row">

		<div class="col-md-6" style="margin-top:10px" >
		<p class="About"><b>About me</b></p>
		<br>

		<small>My name is Akande Matthew Oluwadamilare and I am 21 years old. Currently I'm studying the 3rd out of 5 years of Electrical and computer Engineering degree at Kwara State University in Malete, Ilorin, kwara State. I'm interested in subjects like communication engineering, hardware engineering, web and software development. I'm a very curious, disciplined, focused and self-taught person who likes reading about new tools and technologies, I like to propose efficient solutions to improve any type of process and thus offer final products of high qualities.</small>
	</div>
	<!-- My portrait goes here!-->
	<div class="col-md-6 img"><img src="IMG_20171119_122258.jpg" class="img-rounded"></div>
	
</div> 
<!-- container 1 ends-->
<hr>

<!-- my projects container-->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			
		</div>
		<div class="col-md-6">
			<p style="margin-left:0px;font-style:sans-serif; font-size:30px; font-weight:20px; margin-left:250px"><b>Projects</b><br>
			</p>
			<small style="margin-left: 200px">These are the project in which I have participated:</small>

		</div>
	</div>
</div>	
<br>
<br>


<!-- projects slider body-->
<div class="container-fluid" id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/screenshot_29.png" alt="Data service web homepage" title="Data service web homepage" id="wows1_0"/></li>
		<li><img src="data1/images/screenshot_32.png" alt="User log in page" title="User log in page" id="wows1_1"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/screenshot_33.png" alt="jquery carousel" title="Registeration form" id="wows1_2"/></a></li>
		<li><img src="data1/images/screenshot_51.png" alt="I imitated kwasu portal" title="I imitated kwasu portal" id="wows1_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Data service web homepage"><span><img src="data1/tooltips/screenshot_29.png" alt="Data service web homepage"/>1</span></a>
		<a href="#" title="User log in page"><span><img src="data1/tooltips/screenshot_32.png" alt="User log in page"/>2</span></a>
		<a href="#" title="Registeration form"><span><img src="data1/tooltips/screenshot_33.png" alt="Registeration form"/>3</span></a>
		<a href="#" title="I imitated kwasu portal"><span><img src="data1/tooltips/screenshot_51.png" alt="I imitated kwasu portal"/>4</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">javascript image slider</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>	
<!--  End of project slider -->

<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- Project container closed--> 	

<hr>
<!-- contact form container-->
<div class="container-fluid" style="background-color:whitesmoke">
	<div class="row">
		<div class="col-md-6">
			<h1 style="font-family:sans-serif;">Contact me</h1>
			<p style="font-family:serif; font-size:20px"><small>If you are interested in a budget for your website project, a consultation, want me to create a website for you or want to contact me for anything else, please fill the form below.</small></p>
			<form role="form">
				<fieldset>		
				<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" class="form-control" placeholder="Enter your full name here">
			</div>	
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" class="form-control" placeholder="@example.com">
			</div>
			<div class="form-group">
				<label for="message">Message:</label>
				<textarea name="message" class="form-control" rows="2" cols="3px" placeholder="what do you have for us?"></textarea>
			</div>
			
			<div class="form-group">
			<label for="date" class="col-sm-6 label-control"> Date:</label> 
				<input type="date" name="date" class="col-sm-6 form-control">

			</div>
			 
    <div class="g-recaptcha" data-sitekey="6LelW64UAAAAALx3etIAngYF51leccqiqctpRsCz"></div>
  
			<div class="form-group">
				<input type="submit" name="submit" class=" col-sm-6  btn btn-default" value="SEND">
			</div>
			</fieldset>
		
			</form>
		</div>
		<div class="col-md-6" style="margin-top: 250px" ><img src="IMG-20190720-WA0002.jpg"></div>
	</div>
</div>
<!-- contact form closed-->


	
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<br>
	<br>
 <footer>
 	<small>Website designed and created by Akande Matthew. All right reserved.</small>

 </footer>
 
</body>
</html>