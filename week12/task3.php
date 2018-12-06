<?php
    session_start();
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $batabase = 'week12';
    $conn = mysqli_connect($host, $user, $pass, $database);
    if (!$conn) {
        die('Could not connect: ' . mysqli_error());
    }
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM 'adm' ('username', 'pass') VALUES ('$login','$pass')";
        $result=mysqli_query($conn,$sql);
        if (num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['admin'] = $row['admin'];
            $_SESSION['login'] = $login;
        }
    }
?>
<form action="task3.php">
    Login:<input type="text" name="login" >
    Password:<input type="password" name="pass" >
    <input type="submit" value="Submit">
</form>