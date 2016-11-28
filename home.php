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
  
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">

    <!-- external links for my LOGOS -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	<div class="container">
		<div class="col-sm-10">
			<!--- put something here -->
		</div>
		<div class="col-sm-2">
			<form  method="post">
				<br><button type="submit" class="btn btn-default" name="home">Home</button>
			</form>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<form method="POST">
					<br>
					<label for="address">Address Bits:</label>
			              <input type="number" class="form-control" name="address"  placeholder="Enter address bits"><br>
			        <label for="length">Length of Word:</label>
			              <input type="number" class="form-control" name="length" placeholder="Enter length of words"><br>
			        <div align="center">
			        	<button type="submit" class="btn btn-default" name="submit">Submit</button>
			    	</div>	
			    </form><br><br>
			</div>
			<div class="col-sm-4"></div>
	    <?php
	    if(isset($_POST['home'])){
	    	header('location:index.php');
	    }

	    if(isset($_POST['submit'])){
	    	$address=$_POST['address'];
          	$length=$_POST['length'];
          	$check_bytes = $length%16;
          	$bytes=$length/16;
          	$bits = $length/4;	
          	$a_bytes = $address+$bytes;
          	$a_bits = $address+$bits;
          	
          	if($check_bytes!=0){
          		?>
				<script>
					window.alert("Please enter a length divided by 16");
				</script>
          			
          		

          		<?php
          	}else{
	    	?>
	    
		    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
				<thead>
					<tr>
						<th>User Input Value</th>
						<th>n = <?php echo $address; ?></th> <?php //Capacity ?>
						<th>m = <?php echo $length; ?></th> <?php //Address ?>
					</tr>
				<tbody>
				<?php
						echo "<tr><td></td>"; //1st row
						echo "<td>Capacity</td>";
						echo "<td>Address</td>";

						echo "<tr><td>Word</td>"; //2nd row
						echo "<td>2^".$address."</td>";
						echo "<td>".$address."</td>";

						echo "<tr><td>Bytes</td>"; //3rd row
						echo "<td>2^".$address." * 2^".$bytes."</td>";
						echo "<td>".$a_bytes."</td>";

						echo "<tr><td>Bits</td>"; //4th row
						echo "<td>2^".$address." * 2^".$bits."</td>";
						echo "<td>".$a_bits."</td>";

				?>
				</tbody>
			</table>
			<form method="POST">
				<button type="submit" class="btn btn-default" name="reset">Reset</button><br>
			</form>
			
		<?php 
			} 
		}
		if(isset($_POST['reset'])){
			header("location:home.php");
		}
		?>
		<div class="footer">
				
			Made by: James Adrian G. Andog<br>
						Roxanne Bahingawan
		</div>
	</div>



</body>
</html>