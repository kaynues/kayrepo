<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- <link rel="stylesheet" href="css/hng.css"> -->
		<title>Hotels.ng Internship</title>
		<style type="text/css">
			
		body{
			background-color: #5BD4EF;
			margin: 0;
			padding: 0;
		}
		.menu{
			background: red;
		}
		.menu-left{
			float: left;
			width: 17%;
			text-transform: uppercase;
			letter-spacing: .5vw;
			margin-top: 2%;
			margin-left: 2%;
			margin-bottom: 20%;
		}
		.menu-right{
			float: right;
			text-transform: uppercase;
			margin-right: 2%;
			margin-top: 2%;
			letter-spacing: .5vw;
			margin-bottom: 20%;
		}
		.clockStyle{
			text-align: center;
			clear: both;
		}

		</style>
	</head>
<body>
	<div>
		<div class="menu-left">Home</div>
		<div class="menu-right">Dashboard</div>
	</div>
	<div class="clockStyle">
		<?php echo "<h1> "  . date("h:i:sa")?></h1>
          <?php echo "<h1> " . date("Y-m-d")?></h1> 
	</div>

</body>
</html>