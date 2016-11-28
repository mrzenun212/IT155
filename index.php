<?php
// Start the session
session_start();
?>
<DOCTYPE!>
<html>
<head>
	<title>IT 155</title>
	<meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="jquery/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!--<script src="js/jquery.easing.min.js"></script> -->
    <!-- <script src="js/scrolling-nav.js"></script> -->
  	<link rel="shortcut icon" type="image/x-icon" href="favicon.jpg"/> <!--favicon icon -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">

    <!-- external links for my LOGOS -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	<div class="container">
		<div class="col-sm-12" align="center">IT155 final project</div>
		<div class="row" style="height:30%;">
			<h1 align=center>Modified Calculator<h1>
		</div>
		<div class="row">
			<h3 align=center>Choose the operation you want to perform</h3>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<form method="POST">
				<br><br>
				<div class="col-sm-6" align="center">
					<button type="submit" class="btn btn-default" name="calc1" >A</button><br><br>
					<p>Calculate for Decimal, Binary, Octal and Hexadecimal</p>
		        </div>
		        <div class="col-sm-6" align="center">
		        	<button type="submit" class="btn btn-default" name="calc2">B</button><br><br>
		        	<p>Calculate for Words, Bytes and Bits</p>
		    	</div>
		    </form><br><br>
		</div>
	    <?php
	    if(isset($_POST['calc1'])){
	    	header('location:home2.php');
	    }elseif(isset($_POST['calc2'])){
	    	header('location:home.php');
	    }
	    	?>
		  
	
		<div class="footer">
				
			Made by: James Adrian G. Andog<br>
						Roxanne Bahingawan
		</div>
	</div>

</body>
</html>