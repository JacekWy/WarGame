<?php
require_once("ConnectDB.php");

$user = mysqli_real_escape_string ($conn , $_POST["Username"]);
$password = mysqli_real_escape_string ($conn , $_POST["Password"]);
$passwordr = mysqli_real_escape_string ($conn ,$_POST["RPassword"]);
$city = mysqli_real_escape_string ($conn , $_POST["City"]);




  
$conn->query("insert into data_game.Login (User,Password,City) values ('$user','$password','$city')");
$conn->query("insert into data_game.User_data (wood,stone,food,wood_lvl,stone_lvl,food_lvl) values(200,200,200,1,1,1)");

$conn->close();
header('Location: ../Index.html' );
