<!DOCTYPE html>
<html>
	<head>
		<style>
		#first{
			border: 1px solid red;
			border-radius: 8px;
			display: inline-flex;
			width: 270px;
			height: 75px;
			padding: 1px;
			margin: 7px;
		}
		#ffirst{
			display: inline-block;
		}
		img {
			width: 100px;
			height: 75px;
			border-radius: 8px;
		}
		div #big{
			margin: 4px;
			font-size: 15px;
			font-weight: 800;
		}	
		div #small{
			margin: 4px;
			font-size: 14px;
		}
		</style>

	</head>

	<body>
		<div id = "head">
			<a href="task2.php?category=all">All</a> |
			<a href="task2.php?category=toyota_cars">Toyota</a> |
			<a href="task2.php?category=bmw_cars">BMW</a>
		</div>
		<?php 
		$host = 'localhost';
		$user =  'root';
		$password = '';
		$mysql = mysqli_connect($host,$user,$password,'cars');
		if (!$mysql) {
		    die('Could not connect: ' . mysqli_error());
		}
        $statements=["SELECT * FROM cars","SELECT * FROM cars WHERE maker='Toyota'","SELECT * FROM cars WHERE maker = 'BMW'"];
        for($i=0;$i<3;$i++){
            $query=mysqli_query($mysql,$statements[$i]);
            $num=mysqli_num_rows($query);
            if(isset($_GET['category'])){
                $category = $_GET['category'];
                    if($category == "all"){	
                        for ($i=0; $i <$num ; $i++) { 
                            $result=mysqli_fetch_array($query);
                            $maker=$result['maker'];
                            $model=$result['model'];
                            $price=$result['price'];
                            $year = $result['year'];
                            $img=$result['url'];
                            print '
                            <div id = "first">
                            <img src="'.$img.'">
                            <div id = "ffirst">
                                <div id="big">'.$maker.' '.$model.'</div>
                                <div id ="small">'.$year.'</div>
                                <div id ="small">'.$price.'</div>
                            </div>
                        </div>';
                        }
                    }
                }
		mysqli_close($mysql);
		?>

	</body>

</html>