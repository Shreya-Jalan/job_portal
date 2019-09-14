<?php



$arr1 = array($_POST["firstname"],$_POST["lastname"],$_POST["dob"],$_POST["gender"],$_POST["age"],$_ POST["email"],$_POST["tel"],$_POST["linkedin"],$_POST["Bachelor"],$_POST["Master"],$_POST["po ints"],





$myfile = fopen("users.txt", "wb") or die("Unable to open file!");



for($x = 0; $x < count($arr1); $x++) { fwrite($myfile, $arr1[$x] . "\r\n " );
}

fclose($myfile);
 
?>

