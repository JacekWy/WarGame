<?php
require_once("../Include/ConnectDB.php");
session_start();
$user = $_SESSION['user'];

//Name city
$city_name = $conn->query("select City from data_game.Login where User ='$user'");
$city_name_row = $city_name->fetch_assoc();
$city_name_session = $city_name_row["City"];

//Wood
$wood = $conn->query("select wood from data_game.Login as login join data_game.user_data as mat on  login.id = mat.id where login.User = '$user'");
$wood_row = $wood->fetch_assoc();
$wood_row_session = $wood_row['wood'];

//stone
$stone = $conn->query("select stone from data_game.Login as login join data_game.user_data as mat on  login.id = mat.id where login.User = '$user'");
$stone_row = $stone->fetch_assoc();
$stone_row_session = $stone_row['stone'];

//food
$food = $conn->query("select food from data_game.Login as login join data_game.user_data as mat on  login.id = mat.id where login.User = '$user'");
$food_row = $food->fetch_assoc();
$food_row_session = $food_row['food'];





