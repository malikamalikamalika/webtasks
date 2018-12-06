
<html>
<!doctype>
<head>
    <style>
        table tr td{
            width:230px;
            height:30px;
            padding:5px;
        }
        select{
            width:100%;
            background:white;
            padding:5px;
            border-radius:5px;
        } 
        select[name="options"]{
            width:160px;
        }
        input[type='text']{
            padding:5px;
            border-radius:5px;    
        }
        input[type='submit']{
            padding:5px;
            border-radius:5px;   
        }
        input[type='number']{
            padding:5px;
            border-radius:5px;   
        }
    </style>
</head>
    <?php
    $cars = [
    ["maker"=>"Porsche","model"=>"Panamera","year"=>"2018","engine"=>"gas","price"=>"10000000","additional"=>["investment"]],
    ["maker"=>"Hyundai","model"=>"Accent","year"=>"2017","engine"=>"petrol","price"=>"500000","additional"=>["tax","investment","check"]],
    ["maker"=>"Toyota","model"=>"Corolla","year"=>"2012","engine"=>"diesel","price"=>"320000","additional"=>["tex","investment"]],
    ["maker"=>"Mercedes","model"=>"Benz","year"=>"2008","engine"=>"diesel","price"=>"35000","additional"=>["investment","tex"]],
    ["maker"=>"Nissan","model"=>"Juke","year"=>"2016","engine"=>"gas","price"=>"450000","additional"=>["check","tax"]]
    ];
    $makers = ["Toyota","Hyundai","Mercedes","Porsche","Nissan"];
    $car = -1;
    if (isset($_POST["options"])) {
        $car = $cars[$_POST["options"]];
    }
    
    ?>
<form action="task3.php" method="post">
<select name="options" onchange="this.parentNode.submit()">
    <option value="select">Select car</option>
    <?php 
        for ($i = 0; $i < count($cars); $i++) 
        {?>
            <option value="<?php echo $i; ?>" <?php if(isset($_POST['options']) && $_POST['options'] == $i) echo 'selected';?>> <?php echo $cars[$i]['maker'] . ' ' . $cars[$i]['model']; ?> </option>
                <?php 
        } ?>
</select>
</form>
<form>
<table border="1" bordercolor="black" >
        <tr><td>Maker:</td>
            <td><select name="maker" value="<?php if ($car != -1) echo $car['maker']?>"><?php 
                    for($i=0;$i<count($makers);$i++) {
                        ?>
                        <option value="<?= $makers[$i] ?>" <?php if(isset($_POST['options']) && $makers[$i] == $car['maker'])echo 'selected' ?> ><?= $makers[$i]?></option>;
                    <?php }
                        ?>
                </select></td></tr>
        <tr><td>Year: </td>
        <td><select name="year"  value="<?php if ($car != -1) echo $car['year']?>">

                    <?php 
                    for ($i = 2018; $i >= 1970; $i--) {?>
                        <option value="<?= $i ?>" <?php if(isset($_POST['options']) && $i == $car['year'])echo 'selected' ?>><?= $i ?></option>;
                    <?php }
                    ?>
                </select></td></tr>
        <tr><td>Model:</td>
        <td><input type="text" name="model" value="<?php if ($car != -1) echo $car['model']?>"></td></tr>
        <tr><td>Engine:</td>
        <td>
            <input type="radio" name="engine" value = "Gas" <?php if ($car != -1 && "gas" == $car['engine']) echo "checked"; ?>>
                    <?=  "Gas" ?>
            <input type="radio" name="engine" value = "Petrol" <?php if ($car != -1 && "petrol" == $car['engine']) echo "checked"; ?>>
                    <?=  "Petrol" ?>
            <input type="radio" name="engine" value = "Diesel" <?php if ($car != -1 && "diesel" == $car['engine']) echo "checked"; ?>>
                    <?=  "Diesel" ?></td></tr>
        <tr><td>Additional: </td>
            <td>  
                <input type="checkbox" name="tax_payed" <?php if ($car != -1 && in_array('tax', $car['additional'])) echo "checked"; ?>> tax payed <br>

                <input type="checkbox" name="technical" <?php if ($car != -1 && in_array('check', $car['additional'])) echo "checked"; ?>> technical check passed <br>

                <input type="checkbox" name="invest" <?php if ($car != -1 && in_array('investment', $car['additional'])) echo "checked"; ?>> doesn't require investment <br>
            </td></tr>
    </table>
    <input type="submit" value="Submit"/>
</form>