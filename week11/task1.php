<!DOCTYPE html>
<html>
	<head>
		<style>
		.card{
			border: 2px solid red;
            border-radius: 25%;
			width: 300px;
			height: 75px;
			padding: 2px;
            display: inline-block;
			margin: 3px;
		}
        img {
			width: 130px;
			height: 100px;
			border-radius: 5px;
            padding:2px;

		}
		.right{
			display: inline-flex;
            padding: 2px;
            margin: 3px;
            width:100px;
		}
		.name{
			margin: 4px;
			font-size: 20px;
			font-weight: 600;
		}	
		.year{
			margin: 4px;
			font-size: 18px;
		}
        .price{
            padding:3px;
			margin: 5px;
			font-size:18px;
            
            
		}
		</style>
	</head>
	<body>
		<?php 
		$host = 'localhost';
		$user =  'root';
		$password = '';
		$mysql = mysqli_connect($host,$user,$password,'cars');
		if (!$mysql) {
		    die('Could not connect: ' . mysqli_error());
		}
		$sql="SELECT * FROM cars";
		$query=mysqli_query($mysql,$sql);
		$row=mysqli_num_rows($query);
		for ($i=0; $i <$row ; $i++) { 
			$result=mysqli_fetch_array($query);
			$maker=$result['maker'];
			$model=$result['model'];
			$price=$result['price'];
            $year = $result['year'];
            $img=$result['url'];
			echo '
			<div class = "card">
			<div class = "left"><img src="'.$img.'"></div>
			<div class = "right">
				<div class="name">'.$maker.' '.$model.'</div>
				<div class ="year">'.$year.'</div>
				<div class ="price">'.$price.'</div>
			</div>
		</div>';
	}
		mysqli_close($mysql);
		?>
	</body>
</html>