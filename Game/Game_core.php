<?php
require_once("../Include/ConnectDB.php");
session_start();
$user = $_SESSION['user'];

//Name city
$city_name = $conn->query("select City from data_game.Login where User ='$user'");
$city_name_row = $city_name->fetch_assoc();
$city_name_session = $city_name_row["City"];

//Show materials,lvl
$material = $conn->query("select * from data_game.Login as login join data_game.user_data as mat on login.id = mat.id where login.User = '$user'");
$material_row = $material->fetch_assoc();

//Get info production
$jsondata = file_get_contents("Material.json");
$json = json_decode($jsondata,true);

//Set production
$prod_wood = $json['Bulding']['Lvl'][$material_row['wood_lvl']][0];
$prod_stone = $json['Bulding']['Lvl'][$material_row['stone_lvl']][1];
$prod_food = $json['Bulding']['Lvl'][$material_row['food_lvl']][2];


//Update wood_lvl
$update_wood_w = $json['Update_cost']['update_wood'][2][0];
$update_wood_s = $json['Update_cost']['update_wood'][2][1];
$update_wood_f = $json['Update_cost']['update_wood'][2][2];

if(($update_wood_w < $material_row['wood']) && ($update_wood_s < $material_row['stone']) && ($update_wood_f < $material_row['food']) ){

    //$conn->query("Update data_game.Login as login join data_game.user_data as mat on login.id = mat.id set mat.wood = mat.wood - 100 , mat.stone = mat.stone - 100,mat.food = mat.food - 100  where User = '$user'");
    //$conn->query("Update data_game.Login as login join data_game.user_data as mat on login.id = mat.id set mat.wood_lvl = mat.wood_lvl + 1 where User = '$user'");
}else{
    echo " nie mozna";
}





