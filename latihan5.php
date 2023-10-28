<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Latihan 5</title>
	<style>
		.ganjil {
		width: 50px;
		height: 50px;
		border: 1px solid #333;
		margin-top: 10px;
		margin-bottom: 20px;
		background-color: #003;
		color:#fff;
		}
		.genap {
		width: 50px;
		height: 50px;
		border: 1px solid #333;
		margin-top: 10px;
		margin-bottom: 20px;
		background-color: #999;		
		}
		.text-align {
		font-size: 20px;
		text-align: center;
		}
		.container {
		display: flex;
		diplay:table;
		}
		

		
	</style>
</head>
<body>
	<?php
	$a="1";
	$b="2";
	$c="3";
	$d="4";
	$e="5";
	?>

	
	<div class="wrapper">
	<div class="ganjil">
	<div class="text-align">
			<p><center><?php echo$a?></center></p>
		</div>
		</div>
		</div>
	
	<div class="container">
	<div class="genap">
	<div class="text-align">
			<p><center><?php echo$a?></center></p>
		</div>
		</div>

	<div class="genap">
	<div class="text-align">
			<p><center><?php echo$b?></p></center>
		</div>
		</div>
		</div>
	
	<div class="container">
	<div class="ganjil">
	<div class="text-align">
		<p><center><?php echo$a?></center></p>
	</div>
	</div>

	<div class="ganjil">
	<div class="text-align">
			<p><center><?php echo$b?></p></center>
		</div>
		</div>
	<div class="ganjil">
	<div class="text-align">
			<p><center><?php echo$c?></p></center>
		</div>
		</div>
	</div>

	<div class="container">
	<div class="genap">
	<div class="text-align">
		<p><center><?php echo$a?></center></p>
	</div>
	</div>

	<div class="genap">
	<div class="text-align">
			<p><center><?php echo$b?></p></center>
		</div>
		</div>
	<div class="genap">
	<div class="text-align">
			<p><center><?php echo$c?></p></center>
		</div>
		</div>
	<div class="genap">
	<div class="text-align">
			<p><center><?php echo$d?></p></center>
		</div>
		</div>
		</div>

	<div class="container">
	<div class="ganjil">
	<div class="text-align">
		<p><center><?php echo$a?></center></p>
	</div>
	</div>

	<div class="ganjil">
	<div class="text-align">
			<p><center><?php echo$b?></p></center>
		</div>
		</div>
	<div class="ganjil">
	<div class="text-align">
			<p><center><?php echo$c?></p></center>
		</div>
		</div>
	<div class="ganjil">
	<div class="text-align">
			<p><center><?php echo$d?></p></center>
		</div>
		</div>

	<div class="ganjil">
	<div class="text-align">
			<p><center><?php echo$e?></p></center>
		</div>
		</div>
		</div>




</div>
</div>



	
</body>	
</html>	