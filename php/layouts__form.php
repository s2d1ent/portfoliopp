<?php

print_r($_POST);

$name=htmlspecialchars(trim($_POST["name"]));
$email=htmlspecialchars(trim($_POST["email"]));
$text=htmlspecialchars(trim($_POST["text"]));
$send=htmlspecialchars(trim($_POST["send"]));

if (mb_strlen($name)<3 || mb_strlen($name) > 100) {
	echo "Введите корректное имя";
	exit();
}
include "connect.php";

$connection=mysqli_connect($host,$username,$bdpassword);
$select=mysqli_select_db($connection,$dbname);

echo "Подключение = ";
echo($select);

$query= "INSERT INTO `orders` (`name`,`email`,`text`,`file`,`from`) VALUES ('$name','$email','$text',0,'layouts')";
$result=mysqli_query($connection,$query);

echo " Результат = ";
print_r($result);

mysqli_close($connection);


?>