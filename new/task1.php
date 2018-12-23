<?php
$users=array();
$passs=array();
$host = 'localhost';
   $username = 'root';
   $password = '';
   $db = 'robboschool';

   @ $db_conn = mysqli_connect($host,$username,$password,$db);
   $connection_error = mysqli_connect_error();
   if ($connection_error!=null){
    echo "<p> We have a connection problem: " . $connection_error . "</p>";
   }
   $query = "SELECT user,pass FROM admins";
   $result = mysqli_query($db_conn,$query);

   if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        array_push($users, $row["user"]);
        array_push($passs, $row["pass"]);
         
    }
   } else {
    echo "No results were found";

   }

   mysqli_close($db_conn);



$correct=true;
if (isset($_POST["password"])&& isset($_POST["username"])) {
    $password = $_POST["password"];
    $username = $_POST["username"];
    if ($username == "") {
        echo '<p class="message">Username should not be empty<p>';
        $correct = false;
    }
    if( $password == "" ){
        echo '<p class="message">Password shouldt be empty<p>';
        $correct = false;
    }
    else{
        for($i=0;$i<count($users);$i++){
            if ($username!=$users[$i] || $password!=$passs[$i]) {
                echo '<p class="message">'."Username or Password is wrong ";
                $correct = false;
            }
            else if($username==$users[$i] && $password==$passs[$i]){
                echo "<script>window.location = 'indexadmin.html'</script>";
                $correct=true;
            }
        }
    }
    
}


?>
<html>
<head>
<link rel="stylesheet" href="form.css">
</head>
    <body>
    <form action="task1.php" method="post">
        <table class="formm">
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username" id="username" 
                ></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <input type="submit" value="submit" id="Submit" value="<?php if (isset($username) && !$correct){
                    echo $username; 
                    if ($correct) echo '';
                    }
                    ?>">
        <a class="back" href="http://localhost/new/index.html" style="font-size:30px;position:relative;right:400px;bottom:130px;color:white;text-decoration:none;">Главная</a>
    </form>
</body>
</html>