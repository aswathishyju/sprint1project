<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

	
</head>
<body>
<div class="header">
	<div class="row" style="background-color:#3b5998;height: 40px">
	</div>
<div class="row" style="background-color:#3b5998;height: 60px ">
		<div class="col-md-1" >
		</div>
		<div class="col-md-6">
		<input type="text" name="email" placeholder="search box" size="80">
		<span class="glyphicon glyphicon-search" id="search"></span>
		</div>
		<div class="col-md-1">
		</div>
<div class="col-md-2">
 <div class="row">
	  <div class="col-md-8">
	  <img src="<?php echo $_GET['pic'];?>" width="60">
	  <label><font color="white"><?php
          echo $_GET['name'];
	  ?></font></label>
	  </div>
	  <div class="col-md-4">
	  </div>
</div>	  
</div>
<div class="col-md-2">
		</div>
</div>
</div>
<div class="row">
    <div class="col-md-12" style="background-color: #dfe3ee;height:50px">
    </div>
    <div class="row">
	<div class="col-md-3" style="background-color: #dfe3ee;height:300px">
	<div class="row">
	    <div class="col-md-1">
	    </div>
		<div class="col-md-6">
		<img src ="<?php echo $_GET['pic'];?>" width="50">
		<label><?php
          echo $_GET['name'];
	  ?></label>

	  <label><?php
          echo $_GET['last'];
	  ?></label>
		</div>
		<div class="col-md-5">
		</div>
	</div>
	<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-6">
    <span class="glyphicon glyphicon-edit" >
    <label>edit profile</label>
    </div>
    <div class="col-md-5">
    </div>
</div>
</div>
<div class="col-md-6" style="background-color: #ffffff;height: 300px">
 <div class="row">
	<div class="col-md-4">
	 <span class="glyphicon glyphicon-edit" style="background-color:blue"></span>
    <label>update status</label>
    </div>
    <div class="col-md-4">
    <span class="glyphicon glyphicon-picture" style="background-color:blue"></span>
    <label><font color="blue">Add photos/video</font></label>
    </div>
    <div class="col-md-4">
    <span class="glyphicon glyphicon-text-background" style="background-color:green"></span>
    <label><font color="blue">write note</font></label>
    </div>
 </div>
<hr>
<div class="row">
<div class="col-md-6">
<img src="<?php echo $_GET['pic'];?>" 
 width="65" height="40">
<label><font color="lightgrey">whats on your mind?</font></label>
</div>
<div class="col-md-6">
</div>
</div>
</div>

		<div class="col-md-1" style="background-color: #dfe3ee;height:300px"  >
		</div>
		<div class="col-md-2" style="background-color:  #ffffff;height: 300px">
		</div>
</div>
<div class="row">
    <div class="col-md-12" style="background-color: #dfe3ee;height:30px">
    </div>
</div>
<div class="row">
   <div class="col-md-3" style="background-color: #dfe3ee;height:300px" >
   </div>
   <div class="col-md-6 " style="background-color:  #ffffff;height: 300px">
   </div>
   <div class="col-md-1" style="background-color: #dfe3ee;height:300px">
   </div>
   <div class="col-md-2" style="background-color:  #ffffff;height: 300px">
   </div>
</div>

</body>
</html>