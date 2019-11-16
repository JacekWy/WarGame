<?php
require_once("../Include/ConnectDB.php");
session_start();
$user = $_SESSION['user'];

//Name city
$city_name = $conn->query("select City from data_game.Login where User ='$user'");
$city_name_row = $city_name->fetch_assoc();
$city_name_session = $city_name_row["City"];

//Show materials,lvl
$material = $conn->query("select * from data_game.Login as login join data_game.user_data as mat on  login.id = mat.id where login.User = '$user'");
$material_row = $material->fetch_assoc();

//Get info production
$jsondata = file_get_contents("Material.json");
$json = json_decode($jsondata,true);

//Set production
$prod_wood = $json['Bulding']['Lvl'][$material_row['wood_lvl']][0];
$prod_stone = $json['Bulding']['Lvl'][$material_row['stone_lvl']][1];
$prod_food = $json['Bulding']['Lvl'][$material_row['food_lvl']][2];











