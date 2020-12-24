<?php

print_r($_POST);

$name=htmlspecialchars(trim($_POST["name"]));
$email=htmlspecialchars(trim($_POST["email"]));
$text=htmlspecialchars(trim($_POST["text"]));
$send=htmlspecialchars(trim($_POST["send"]));
$file=$_POST["file"];

if (mb_strlen($name)<3 || mb_strlen($name) > 100) {
	echo "Введите корректное имя";
	exit();
}
if ($file==null || $file==undefined || $file=="") {
	$file=0;
}
include "connect.php";

$connection=mysqli_connect($host,$username,$bdpassword);
$select=mysqli_select_db($connection,$dbname);

$query= "INSERT INTO `orders` (`name`,`email`,`text`,`file`,`from`) VALUES ('$name','$email','$text','$file','buy')";
$result=mysqli_query($connection,$query);

echo "$result";

mysqli_close($connection);


?>