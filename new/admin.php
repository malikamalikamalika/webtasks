<?php
    $title="";
    $text="";
    $img="";

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


    @ $db_conn = mysqli_connect($host,$username,$password,$db);
    $connection_error = mysqli_connect_error();
    if ($connection_error!=null){
        echo "<p> We have a connection problem: " . $connection_error . "</p>";
    }

   
?>
<html>
<head>
<link rel="stylesheet" href="form.css">
</head>
    <body>
        <table class="formm">
            <tr>
                <td>Title: </td>
                <td><input type="title" name="title" id="title" 
                <?php $img=$_POST['title']?>></td>
            </tr>
            <tr>
                <td>Text:</td>
                <td><input type="text" name="text" <?php $img=$_POST['text']?>></td>
            </tr>
            <tr>
                <td>Img:</td>
                <td><input type="img" name="img" <?php $img=$_POST['img']?> ></td>
            </tr>
        </table>
        <input type="submit" value="Add" id="Submit" value="<?php
        $query = "INSERT INTO `cont`(`title`, `text`, `img`) VALUES ($title,$text,$img)";
        $result = mysqli_query($db_conn,$query); 
        mysqli_close($db_conn);?> 
        ">
        <a class="back" href="http://localhost/new/index.html" style="font-size:30px;position:relative;right:400px;bottom:130px;color:white;text-decoration:none;">Главная</a>
    </form>
</body>
</html>