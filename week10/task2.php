<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["maker"]) && isset($_POST["model"])){
            echo "You added new item: <strong>" . $_POST["maker"]. " " . $_POST["model"] . "</strong><br>";
        }
        if(isset($_POST["year"]) && isset($_POST["eng"])){
            echo 'produced in <strong>'.$_POST["year"]. '</strong> (' . (2018 - $_POST["year"]) . ' years old) '."with " ."<strong>". $_POST["eng"] . " engine</strong><br>";
        }
        if(isset( $_POST["price"])){
            echo "Price: <strong>$" . $_POST["price"];
        }
        if (isset($_POST["tax_payed"])){
            echo "</strong><br>Technical check passed: <strong>"."\n"."No";
            echo "</strong><br>Tax payed: <strong>";
            echo "Yes";
            echo "</strong><br>Doesn't require investment: <strong>"."\n"."No";
        }
        if (isset($_POST["technical"])){
            echo "</strong><br>Technical check passed: <strong>";
            echo "Yes";
            echo "</strong><br>Tax payed: <strong>"."\n"."No";
            echo "</strong><br>Doesn't require investment: <strong>"."\n"."No";
        }
        if(isset($_POST["require"])){
            echo "</strong><br>Technical check passed: <strong>"."\n"."No";
            echo "</strong><br>Tax payed: <strong>"."\n"."No";
            echo "</strong><br>Doesn't require investment: <strong>";
            echo "Yes";
        }
} 
    
?>
