<a href="task92.php?category=sport">Sport news</a> | <a href="task92.php?category=politics">Politic news</a><br/><br/>
<a href="task92.php?category=sport&format=json">Sport news (JSON)</a> | <a href="task92.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news=["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
$category=["sport"];
$categ=$_REQUEST["category"];
$json=$_REQUEST["format"];

if($json=="json"){
    echo $news[$categ];
}
else{
    echo $news[$categ][0];
    echo "<br/>";  
    echo $news[$categ][1];
}
?>