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
		.yearr{
			margin: 4px;
			font-size: 18px;
		}
        .price{
            padding:3px;
			margin: 5px;
			font-size:18px;
		}
        .top{
            margin: 0px; 
            padding: 0px;
            position:relative;
            top:20px;
            left:40px;
        }
        body{
            font-size:30px;
        }
        .button {
			padding: 10px;
			font-size: 20px;
            border-radius: 8px;
			color: grey;
		}
		.car {
            padding:3px;
			margin: 10px;
		}
		.car label {
            padding:10px;
			display: inline flex;
			text-align: center;
			margin: 5px;
		}
		.car input {
            margin:6px;
			height: 50px;
			width: 130px;
			padding: 5px;
			font-size: 20px;
            font-weight:600px;
			border-radius: 24%;
			border: 3px solid lightgrey;
		}
        .admin {
            font-weight:600px;
			width: 120px;
            text-align: center;
            position: relative;
            top:20px;
            left:40px;
            border: 1px solid black;
			margin: 23px;
			color: white;
			padding: 15px;
			border-radius: 7px;
		}
	</style>
	</head>
	<body>
    <form action="task3.php" method="post">
    <div class='top'>
			<div class='admin'>Admin Page</div>	
			<div class="car">
            <table>
                <tr>
                    <td><label>Maker:</label></td>
                    <td><input type="text" name="maker"></td></tr>
                <tr>
                    <td><label>Model:</label></td>
                    <td><input type="text" name="model"></td></tr>
                <tr>
                    <td><label>Price:</label></td>
                    <td><input type="text" name="price"></td></tr>
                <tr>
                    <td> <label>Year:</label></td>
                    <td><input type="text" name="yearr"></td></tr>
                <tr>
                    <td><label>Image(url):</label></td>
                    <td><input type="text" name="urll"></td></tr>
                <tr>
                    <td><input type="submit" class="button" value="Add new"></td></tr>
			</div>
        </div>
	</form>
		<?php 
		session_start();
		$host = 'localhost';
		$user =  'root';
		$password = '';
		$mysql = mysqli_connect($host,$user,$password,'cars');
		if (!$mysql) {
		    die('Could not connect: ' . mysqli_error());
		}
			
			function addNew($mysql,$maker,$model,$price,$year,$url) {
					$sql = "INSERT INTO 'cars' WHERE maker='$maker',model='$model',price='$price',yearr='$year',urll='$url' ";
					mysqli_query($mysql,$sql);
					mysqli_close($mysql);
		}
				if (isset($_POST['maker']) && isset($_POST['model']) && isset($_POST['price'])&& isset($_POST['yearr'])&& isset($_POST['urll'])) {
				    $result = addNew($mysql,$_POST['maker'], $_POST['model'], $_POST['price'], $_POST['yearr'], $_POST['urll']);
				}
			function delete($mysql,$maker,$model,$price,$year,$url) {
					$sql = "INSERT INTO `cars`(`maker`,`model`,`price`,`yearr`,`urll`) VALUES ('$maker','$model','$price','$year','$url')";
					echo $year;
					mysqli_query($mysql,$sql);
					mysqli_close($mysql);
		}
				if (isset($_POST['maker']) && isset($_POST['model']) && isset($_POST['price'])&& isset($_POST['yearr'])&& isset($_POST['urll'])) {
				    $result = addNew($mysql,$_POST['maker'], $_POST['model'], $_POST['price'], $_POST['yearr'], $_POST['urll']);
				}
		$sql="SELECT * FROM cars";
		$query=mysqli_query($mysql,$sql);
		$num=mysqli_num_rows($query);
		for ($i=0; $i <$num ; $i++) { 
			$result=mysqli_fetch_array($query);
			$maker=$result['maker'];
			$model=$result['model'];
			$price=$result['price'];
            $year = $result['yearr'];
            $img=$result['urll'];
			echo '
			<div class = "card">
			<div class = "left"><img src="'.$img.'"></div>
			<div class = "right">
				<div class="name">'.$maker.' '.$model.'</div>
				<div class ="yearr">'.$year.'</div>
				<div class ="price">'.$price.'</div>
            </div>
            </div>';
	}
		mysqli_close($mysql);
		?>
	</body>
</html>