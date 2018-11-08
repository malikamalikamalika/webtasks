<html>
<head><style>
.cards{display:flex;flex-wrap:wrap;width:700px;margin-left:auto;margin-right:auto;}
.cards .card{width:250px;border:1px solid red;border-radius:5px;display:flex;margin:10px;}
    img{
        width:100px;
        height: 100px;
    }
    .name{
        margin: 0;
        padding: 0;
    }
    .price{
        color:green;
        margin-top: 0px;
        display: block;
        margin-bottom: 40px;
    }
    .year{
        font-weight: bold;
        display: block;
    }
    .menu{
        text-align: center;
    }
</style></head>
<body>

<div class="cards">
<?php
$cars = [["maker"=>"Toyota","model"=>"Carina","year"=>2001,"price"=>20000,"image"=>"https://a.d-cd.net/cea52es-480.jpg"],["maker"=>"Toyota","model"=>"Camry","year"=>2005,"price"=>30000,"image"=>"https://d1hu588lul0tna.cloudfront.net/toyotaone/ruru/002-camry-exclusive-next-steps_tcm-3020-870114.jpg"],["maker"=>"Audi","model"=>"A8","year"=>1986,"price"=>12000,"image"=>"http://www.theautohost.com/_contentPages/vehicleContentPages/audi/2017/A8%20L/images/2017-Audi-A8L-exterior-grille.jpg"],
["maker"=>"Audi","model"=>"A6","year"=>2005,"price"=>30000,"image"=>"https://www.cstatic-images.com/car-pictures/xl/USC60AUC021B021001.png"],
["maker"=>"BMW","model"=>"X5","year"=>2007,"price"=>17000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],["maker"=>"BMW","model"=>"X5","year"=>2015,"price"=>19000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],["maker"=>"BMW","model"=>"Model 7","year"=>2014,"price"=>22000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],
["maker"=>"Lada","model"=>"Granta","year"=>2017,"price"=>7000,"image"=>"http://www.kolesa.ru/uploads/2017/06/Lada-Granta-restyle-front1-1600x0-c-default.jpg"]
];

$pr = $_REQUEST["price"];
$mk = $_REQUEST["maker"];
$yr = $_REQUEST["year"];




for($i=0;$i<sizeof($cars);$i++){
    if($cars[$i]["year"] < 2010){
        $yr = "old";
    }
    if($cars[$i]["price"]> 20000){
        $pr == "expensive";
    }
}
for($j=0;$j<sizeof($cars);$j++){
    if($pr=="expensive"){
        echo "<div class='card'>";
        echo "<img src=" . $cars[$j]["image"] . ">";
        echo "<div class='info'>";
        echo "<span class='year'>" . $cars[$j]["year"] . " years </span>";
        echo "<span class='price'>" . $cars[$i]["price"] . "$</span>";
        echo "<h3 class='name'>" . $cars[$j]["maker"] . " " . $cars[$j]["model"] . "</h3>";
        echo "</div>";
        echo "</div>";
        echo "<br/>";
    }
    if($yr=="old"){
        echo "<div class='card'>";
        echo "<img src=" . $cars[$j]["image"] . ">";
        echo "<div class='info'>";
        echo "<span class='year'>" . $cars[$j]["year"] . " years </span>";
        echo "<h3 class='name'>" . $cars[$j]["maker"] . " " . $cars[$j]["model"] . "</h3>";
        echo "<span class='price'>" . $cars[$j]["price"] . "$</span>";
        echo "</div>";
        echo "</div>";
        echo "<br/>";
    }
    
    if(strcmp($cars[$j]["maker"],$mk) == 0){
        echo "<div class='card'>";
        echo "<img src=" . $cars[$j]["image"] . ">";
        echo "<div class='info'>";
        echo "<span class='year'>" . $cars[$j]["year"] . " years </span>";
        echo "<span class='price'>" . $cars[$j]["price"] . "$</span>";
        echo "<h3 class='name'>" . $cars[$j]["maker"] . " " . $cars[$j]["model"] . "</h3>";
        echo "</div>";
        echo "</div>";
        echo "<br/>";
    }

 
?>
</div>
<div class="menu">
<a href="task92.php">Home</a>|<a href="task92.php?maker=Toyota">Toyota</a>|<a href="task92.php?maker=BMW">BMW</a>|<a href="task92.php?maker=Audi">Audi</a>|<a href="task92.php?maker=Lada">Lada</a></div>

<div class="menu">
<a href="task92.php?year=old">Old cars (More than 7 years)</a>|<a href="task92.php?price=expensive">Expensive cars (more than 20.000$)</a></div>