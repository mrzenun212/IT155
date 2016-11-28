<?php
// Start the session
session_start();
?>
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
				<br><button type="submit" class="btn btn-default" name="home">Home</button><br><br>
			</form>
		</div>
	</div>
    <div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<form method="POST">
					<label for="type">Select data type:</label>
					<select id="type" name="type" class="form-control">
			            <option selected="selected" value="dec" name="dec">decimal</option>
			            <option value="bin" name="bin">binary</option>
			            <option value="oct" name="oct">octal</option>
			            <option value="hex" name="hex">hexadecimal</option>
			        </select><br>
					<label for="number">Input data:</label>
		            	<input type="text" class="form-control" name="num"  placeholder="Enter number "><br>
			        <div align="center">
			        	<button type="submit" class="btn btn-default" name="submit">Submit</button><br>
		        	</div>
		        </form>
    		</div>
    		<div class="col-sm-4"></div>
    	</div>
     
	    <?php
            if(isset($_POST['home'])){
	    		header('location:index.php');
	  		}


	    	if(isset($_POST['submit'])){
	    		?>
	    		<br><br>
	    		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
				<thead>
					<tr>
						<th><?php echo "Number System"; ?></th> 
						<th><?php echo "Value"; ?></th> 
					</tr>
				<tbody>
			<?php
		    	$num=$_POST['num'];	
	            echo "<tr><td>You entered: </td>"; //3rd row
	    	
	            if( $_POST['type']=='dec' ){   //----------solving here-------------------
		            $decibin = decbin($num);
		            $decioct = decoct($num);
		            $decihex = dechex($num);
		            echo "<td>$num (Decimal) </td>";
		            echo "<tr><td>Binary</td>"; //3rd row
		            echo "<td>".$decibin."</td>";
		            echo "<tr><td>Octal</td>"; //3rd row
		            echo "<td>".$decioct."</td>";
		            echo "<tr><td>Hexadecimal</td>"; //3rd row
		            echo "<td>".$decihex."</td>";
	            }elseif( $_POST['type']=='bin' ){
	                echo "<td>$num (Binary) </td>";
		            $bindeci = bindec($num);
		            $binoct = base_convert($num,2,8);
		            $binhex = base_convert($num,2,16);      
		            echo "<tr><td>Decimal</td>"; //3rd row
		            echo "<td>".$bindeci."</td>";
		            echo "<tr><td>Octal</td>"; //3rd row
		            echo "<td>".$binoct."</td>";
		            echo "<tr><td>Hexadecimal</td>"; //3rd row
		            echo "<td>".$binhex."</td>";  
	            }elseif( $_POST['type']=='oct' ){
	                echo "<td>$num (Octal) </td>";
		            $octdeci = octdec($num);
		            $octbin = base_convert($num,8,2);
		            $octhex = base_convert($num,8,16);
		           	echo "<tr><td>Decimal</td>"; //3rd row
		            echo "<td>".$octdeci."</td>";
		            echo "<tr><td>Binary</td>"; //3rd row
		            echo "<td>".$octbin."</td>";
		            echo "<tr><td>Hexadecimal</td>"; //3rd row
		            echo "<td>".$octhex."</td>";
	            }elseif( $_POST['type']=='hex' ){
	                echo "<td>$num (Hexadecimal)</td>"; //3rd row
		            $hexdeci = hexdec($num);
		            $hexbin = base_convert($num,16,2);
		            $hexoct = base_convert($num,16,8);
		            echo "<tr><td>Decimal</td>"; //3rd row
		            echo "<td>".$hexdeci."</td>";
		            echo "<tr><td>Binary</td>"; //3rd row
		            echo "<td>".$hexbin."</td>";
		            echo "<tr><td>Octal</td>"; //3rd row
		            echo "<td>".$hexoct."</td>";
            	} ?>
	            	</tbody>
				</table>
				
            	<form method="POST">
					<button type="submit" class="btn btn-default" name="reset">Reset</button><br>
				</form>
				<?php
            }
    	?>
	</div>
	<?php
		if(isset($_POST['reset'])){
			header("location:home2.php");
		}
	?>
	<div class="footer">		
			Made by: James Adrian G. Andog<br>
					Roxanne Bahingawan
	</div>
</body>
</html>