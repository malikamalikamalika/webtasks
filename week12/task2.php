<?php
    $cars = [
        ["maker"=>"Porsche","model"=>"Panamera","price"=>10000000],
        ["maker"=>"Mercedes","model"=>"Benz","price"=>345000],
        ["maker"=>"Nissan","model"=>"Juke","price"=>300000],
        ["maker"=>"Hyundai","model"=>"Accent","price"=>90000]
    ];
    for($i=0;$i<count($cars);i++) { 
        array_push($bsk,$price);
        $time = time() + 60*60;
        echo "<p>" . $cars[$i]['maker'] . ' ' . $cars[$i]['model'] . "";
        if (!in_array($cars[$i]['price'], $bsk))
        $price = $_GET["price"];
        if (isset($_COOKIE["bsk"])){
            $bsk = json_decode($_COOKIE["bsk"]);
        }
            echo $time.$cars[$i][price]."<p> Add to basket</p></br>";
        else
            echo "<p> Already in basket</p></br>";
            $bsk = [];
    }
    if (isset($_COOKIE["bsk"])){
        $bsk = json_decode($_COOKIE["bsk"]);
    }
    else{
        $bsk = [];
        echo "<span> In Basket </span></br>";
    }
    if (count($bsk) == 0) {
        echo "There is no items in basket";
    }
    else {
        echo "Items with price: ".$bsk[0];
        for ($i=0; $i < count($bsk)+1; $i++) { 
            echo ", " . $bsk[$i+1];
        }
    }
    
?>