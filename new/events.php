
<?php
$coun=0;
			$title=array();
			$text=array();
			$img=array();
			$host = 'localhost';
			   $username = 'root';
			   $password = '';
			   $db = 'content';
			
			   @ $db_conn = mysqli_connect($host,$username,$password,$db);
			   $db_conn->set_charset("utf8");
			   $connection_error = mysqli_connect_error();
			   if ($connection_error!=null){
				echo "<p> We have a connection problem: " . $connection_error . "</p>";
			   }
			   $query = "SELECT title,text, img FROM cont";
			   $result = mysqli_query($db_conn,$query);
			   if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)){
					array_push($title, $row["title"]);
					array_push($text, $row["text"]);
					array_push($img, $row["img"]);
        
					echo "<div class='card'>"
								. "<div class=''>".
									"<img ".
									"src='".$row["img"]."' style='height:200px; width:260px;'>
								</div>
								<div>
									<h4>".$row["title"]."</h4>
									<p>".$row["text"]."
									</p>
								</div>
							</div>";
					 
				}
			   } else {
				echo "No results were found";
			
			   }
			
			   mysqli_close($db_conn);
			
			
?>			
<!DOCTYPE html>
	<html >
	<head>
		<link rel="shortcut icon" href="photos/logo.png">
		<title>Robbo School</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<meta charset="UTF-8">
		</head>
		<body>	
		  <header id="header" id="home">
	  		<div class="headertop">
				  <div class="icon">
					<ul class="site">
						<li><a href="#"><i class="fab fa-facebook-f" target="_blank"></i></a></li>
						<li><a href="https://vk.com/robboschool"target="_blank"><i class="fab fa-vk"></i></a></li>
						<li><a href="https://www.instagram.com/robboschool/"target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UChKKq4NU-PnsppNRq0DE4cA" target="_blank"><i class="fab fa-youtube"></i></a></li>
					</ul>	
						</div>		
						<div class="telinfo">
			  				<a href="tel:+7088082020"><span class="text">+ (708) 808 20 20</span></a>
			  				<a href="robboschool.kz" target="_blank"><span class="text">robboschool.kz</span></a>			
						  </div>
						</div>
			  		
			</div>
		    <div class="realmenu">
			      <div id="logo">
					<a href="index.html"><img class="logo" src="photos/logo.png" /></a>
			      </div>
			      <nav id="menu">
						<ul class="menu">
								<li><a href="index.html">Главная</a></li>
								<li><a href="about.html">О нас</a></li>
								<li><a href="courses.html">Услуги</a></li>
								<li><a href="events.php">Наши преимущества</a></li>
								<li><a href="contact.html">Контакты</a></li>
							  </ul>
							  <ul class="sign">
								<li><a href="http://localhost/new/task1.php">Войти</a></li>
						</ul>
			      </nav>	    		
		    	</div>
		    </div>
		  </header>
		</header>
		<section class="about" id="about">
			<div class="welcome">				
									<h1 class="textuppercase">Наши преимущества 				
									</h1>	
									<p class="sit"><a href="index.html">Главная</a> <i class="fas fa-arrow-right" id="arrow"></i>  <a href="events.html">Наши преимущества</a></p>
								</div>	
					</section>
		
			
			<section class="fea">
				<div class="feat">
				<?php while($coun<$row+1){?>
							<div class="card">
								
								<div class="">
									<img class="" src="<?php echo $img[$coun]; ?>" style="height:200px; width:260px;">
								</div>
								<div class="">
									<h4><?php echo $title[$coun]; ?></h4>
									<p><?php echo $text[$coun]; $coun++?>
									</p>
								</div>
								</div><?php }?>
							<div class="card">
								<div class="">
									<img class="" src="photos/robbo5.GIF" style="height:200px; width:260px;">
								</div>
							<div class="">
									<h4>НАШИ УЧЕНИКИ БУДУТ ОБЛАДАТЬ ЗНАНИЯМ В ОБЛАСТИ</h4>
									<p>
											• Программирования</br>
											• 3D моделирования </br>
											• Схемотехники </br>
											• Введении проектов 
								</p>
								</div>
						</div>
						<div class="card">
							<div class="">
								<img class="" src="photos/pro.GIF" style="height:200px; width:260px;">
							</div>
								<div class="">
									<h4>ЗАНЯТИЯ ПРОВОДЯТСЯ НА ТРЕХ ЯЗЫКАХ</h4>
										<p>
												
												• Казахский </br>
												• Русский </br>
												• Английский 
										</p>
									</div>
							</div>
							<div class="card">
								<div class="">
									<img class="" src="photos/smth.GIF" style="height:200px;width:260px;">
							</div>
								<div class="">
									<h4>НАШИ УЧЕНИКИ РЕГУЛЯРНО УЧАСТВУЮТ</h4>
								<p>
										• В различных международных соревнованиях, конкурсах и олимпиадах</br>
										• Ежемесячных мастерклассах, которые проводят самые опытные учителя
										</p>
									</div>
								</div>
								<div class="card">
								<div class="">
									<img class="" src="photos/team.GIF" style="height:200px;width:260px;">
									</div>
								<div class="">
									<h4>ДЛЯ ЛУЧШИХ ПРОЕКТОВ</h4>
								<p>
										• Мы можем привлечь инвесторов для запуска проектов наших учеников</br>
										• После окончания курса выдаем сертификат
								</p>
								</div>
							</div>
						<div class="card">
							<div class="">
								<img class="" src="photos/hand.GIF" style="height:200px; width:260px;">
								</div>
								<div class="">
								<h4>УСЛОВИЯ ОБУЧЕНИЯ</h4>
								<p>
										• Полностью оборудованные кабинеты</br>
										• Предоставляем учебные материалы, так же набор для робототехники</br>
										• В группах от 5 до 10 учеников
								</p>
								</div>										
							</div>
						<div class="card">
								<div class="">
								<img class="" src="photos/make.GIF" style="height:200px;width:260px;">
								</div>
								<div class="">
									<h4>РОБОТОТЕХНИКА</h4>
									<p>• Прикладная наука, занимающаяся разработкой автоматизированных технических систем и являющаяся важнейшей технической основой развития производства.
								</p>
							</div>										
						</div>
						<div class="card">
						<div class="">
								<img class="" src="photos/robbo5.GIF" style="height:200px; width:260px;">
										</div>
								<div class="">
									<h4>ЦЕЛЬ</h4>
										<p>• В данный момент робототехника одна из развитых индустрии.Бдагодаря этой индустрии люди достигают большего и живут с комфортом.
								</p>
							</div>																	
					</div>
				</div>	
			</section>
			<section class="probnyi">
				<div class="t2">
					<div class="sel">
							<h1 class="text-white">
									Успей записаться
								
							</h1>
							<p style="font-size:15px;">Количества мест ограничено.Тебя ждет грандиозное 
								<span>будущее в сфере робототехники.Успей записаться.</span>
							</p>
						</div>
						<div class="maz">
							<div class="fix">
									<a href="#"><h4>Эксперт учителя</h4></a>		
									<p style="font-size:15px;">У нас квалифиционные учителя.
									<span>Одни из самых популярных пре-</span>
									<span>подаватeлей в сфере айти.</span>
									</p>						
								</div>
								<div class="fix2">
									<a href="#"><h4>Сертификация</h4></a>		
									<p style="font-size:15px;">Мы много раз потдверждали 
									<span>свою деятельность.У нас есть.</span>
									<span>много сертификатов</span>
									</p>
									</div>						
								</div>							
						<div class="t3">
							<form class="forma" action="register.php" method="post" >
								<h4 class="">Записаться</h4>		
								<input type="text" class="forma" name="name" placeholder="Имя" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Имя'" >
							<input type="phone" class="forma" name="phone" placeholder="Номер телефона" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Номер телефона'" >
							<input type="email" class="forma" name="email" placeholder="Email адрес" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email адрес'" >
								<div class="formselect" id="selection">
										<select>
												<option datd-display="">Выбери возрастную категорию</option>
												<option value="1">5-8</option>
												<option value="2">9-12</option>
												<option value="3">13-16</option>
												<option value="4">17-18</option>
											</select>
								</div>									
								<button class="btn">Отправить</button>
							</form>
						</div>
					</div>
				</div>	
			</section>
								
			<footer class="footer">
				<div class="bottom">
					<ul class="site">
						<li><a href="#"><i class="fab fa-facebook-f" target="_blank"></i></a></li>
						<li><a href="https://vk.com/robboschool"target="_blank"><i class="fab fa-vk"></i></a></li>
						<li><a href="https://www.instagram.com/robboschool/"target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UChKKq4NU-PnsppNRq0DE4cA" target="_blank"><i class="fab fa-youtube"></i></a></li>
					</ul>
						</div>
			</footer>	
		</body>
	</html>