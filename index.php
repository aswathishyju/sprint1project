<!DOCTYPE html>	
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/indexstyle.css">
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/facebok1.js">

			
		</script>
	</head>
	<body>

		<div class="container-fluid">
			<div class="row header">
				<div class="col-md-3">
					<img src="images/boot.png" width="80%" height="60%">
				</div>
				<div class="col-md-6 col-md-offset-3 hidden-xs">
					<form name="f1" method="post">
					<!-- <label style="color:white;">Enter your email id</label> -->
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<label style="color:white;">Email or phone</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<label style="color:white;">Password</label>
					<br>
					<input type="text" placeholder="username" id="username">
					&nbsp&nbsp<input type="password" placeholder="password" id="password">
					
					<input type="submit" class="btn-info" value="login" id="login">
					<label id="error1" style="color:black;"></label>
					<label id="error2" style="color:black;"></label><br>
					&nbsp&nbsp<input type="checkbox">
				<span style="color:white;">	Keep me logged in&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbspForgot your password?
					</span>
					</form>
				</div>
			</div>
			<div class="row  hidden-xs">
				<div class="col-md-6" >
						<br><br>&nbsp&nbsp&nbsp&nbsp<label>
						Facebook helps you to connect and share with <br>the people in your life
						</label>
						<br>
						<img src="images/map.jpg" class="image">
				</div>
				<div class="col-md-4 col-md-offset-2 form-group">
							<br><label style="font-size:35px;"><b>Create an account</b></label>
							<br>it's free and always will be
							<br><br>
							<form name="f2" method="post" onsubmit="return check()">
							<label id="error3"></label>&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label id="error4"></label><input type="text" placeholder="First name" name="name1" class="mobile1 form-control">
							<input type="text" placeholder="surname" class="mobile1 form-control" style="margin-top: -8%; margin-left: 45%;" name="name2"><br>
							 <label id="error5"></label>
							<input type="text" class="mobile form-control" placeholder="E-mail or mobile number" name="name3">
							<label id="error6"></label>
							<br><input type="text"  class="mobile form-control" placeholder="Re-enter mobile number" name="name4">
							<br> <label id="error7"></label>
							<input type="text" class="mobile form-control"  placeholder="New password" name="name5">
							<br><br><span class="span1"><b>BIRTH DAY</b></span><br><br>
						<select style="color:black; width:20%;" class="form-control" >
							<option>Day</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
						<select style="color:black;  width:20%; margin-top:-8%; margin-left: 20%" class="form-control">
							<option>month</option>
							<option>jan</option>
							<option>feb</option>
							<option>mar</option>
							<option>apr</option>
						</select>
						<select style="color:black; width:20%; margin-top:-8%;  margin-left: 40%" class="form-control">
						<option>year</option>
							<option>1990</option>
							<option>1991</option>
							<option>1992</option>
							<option>1993</option>
						</select>
							<a href="#">why do i need to provide my date of birth?</a>
							<br>
							<input type="radio" id="female"><span class="span1"> Female</span>
							&nbsp&nbsp&nbsp&nbsp<input type="radio" id="male"><span class="span1">Male</span>
							<br><br><span class="span1">By clicking create an account you agree to our </span><span class="btn-link">terms</span><span class="span1"> and  that you have to read our</span>
							<span class="btn-link"> data policy </span> inclding our <span class="btn-link">cokiee use</span>
							<br><br>
							<input type="submit" class="btn-success btn" value="Create an account">
							</form>
							<br><hr style="background-color:black;">
							<span class="btn-link">create a page</span> <span class="span1">&nbspfor a celebrity,band or business</span>
				</div>
			</div>
			<div class="row hidden-lg" style="background-color:#ECEFF5;">
				<input type="text" class=" mobile2 form-control" placeholder="Email address or phone number" style="margin-top: 20% ;" >
				<input type="text" class=" mobile2 form-control" placeholder="password">
				<button class="btn-info btn mobile2 account">Login</button>
				<button class="btn-info btn  acco"> CREATE NEW ACCOUNT</button>
				<br><br><span class="btn-link">Forgotten password?help centre</span>
				
			</div>
			<div class="row hidden-lg">
			<div class="col-xs-4">
				<a href="#">English</a>
				<br><br>
				<a href="#">malayalam</a>
				</div>
				<div class="col-xs-4 col-xs-offset-4"
				<a href="#">hindi</a><br><br>
				<a href="#">kannad</a>
				</div>
				<span class="span2">Facebook2016</span>
			</div>
		</div>
	</body>
</html>