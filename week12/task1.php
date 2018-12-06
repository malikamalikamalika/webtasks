<?php
    if (isset($_GET["name"])) {
        setcookie("name", $_GET["name"]);
    }
    else if (!isset($_COOKIE["name"])){
?>
<html>
<head>
    <style>
    input{
        width:100px;
        height:30px;
    }
    .enter{
        position:relative;
        left:30px;
        top:20px;
    }
    input[type='submit']{
        width:20px;
        border-radius:10px;
    }
    </style>
</head>
    <body>
<form action="task1.php">
    <span class="enter">Enter your name:</span><input type="text" name="name"/>
    <input type="submit" value="Submit" />
</form>
<?php
}
    else {
    echo "Hello ".$_COOKIE["name"];
    }
?>