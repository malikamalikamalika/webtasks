<?php
$users = array("malika","madina","saniya");
$correct=true;
if (isset($_POST["password"]) && isset($_POST["confirm"])&& isset($_POST["username"])) {
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];
    $username = $_POST["username"];
    if ($username == "") {
        echo '<p class="message">Username should not be empty<p>';
        $correct = false;
    }
    if (in_array($username, $users)) {
        echo '<p class="message">'."Username $username is already reserved";
        $correct = false;
    }
    if($confirm == "" && $password == "" ){
        echo '<p class="message">Password and Confirm password shouldt be empty<p>';
        $correct = false;
    }
    else if ($password != $confirm && $confirm != "" && $password != "" ) {
        echo '<p class="message">Password and Confirm password are not same<p>';
        $correct = false;
    }
    else if ($password == "") {
        echo '<p class="message">Password shouldt be empty<p>';
        $correct = false;
    }
    else if($confirm == ""){
        echo '<p class="message">Confirm password shouldt be empty<p>';
        $correct = false;
    }
    else{
        echo '<p class="suc">You have registered<p>';
        $correct=true;
    }
    
}


?>
<html>
<head>
    <style>
        .message{
            border:2px solid red;
            font-weight:bold;
            padding:3px;
            width:400px;
        }
        .suc{
            border:2px solid green;
            font-weight:bold;
            padding:3px;
            width:400px;
        }
    </style>
</head>
    <body>
    <form action="task1.php" method="post">
        <table>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username" id="username" 
                value="<?php if (isset($username) && !$correct){
                    echo $username; 
                    if ($correct) echo '';
                    }?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="confirm"></td>
            </tr>
        </table>
        <input type="submit" value="submit" id="submit">
    </form>
</body>
</html>