<?php
require_once("../Include/ConnectDB.php");
session_start();
$user = $_SESSION['user'];

//Name city
$city_name = $conn->query("select City from data_game.Login where User ='$user'");
$city_name_row = $city_name->fetch_assoc();
$city_name_session = $city_name_row["City"];

//Show materials
$material = $conn->query("select * from data_game.Login as login join data_game.user_data as mat on  login.id = mat.id where login.User = '$user'");
$material_row = $material->fetch_assoc();
$wood_row_session = $material_row['wood'];
$stone_row_session = $material_row['stone'];
$food_row_session = $material_row['food'];


//Production Buildings
$jsondata = file_get_contents("Material.json");
$json = json_decode($jsondata,true);
$json['Bulding']['Lvl'][1][0];

//Production Wood








