<?php
require_once("ConnectDB.php");

$user = mysqli_real_escape_string ($conn , $_POST["Nickname"]);
$password = mysqli_real_escape_string ($conn , $_POST["Password"]);

echo $user;
echo $password;

$login = $conn->query("select * from data_game.Login where User = '$user' and Password = '$password'");
$row = $login->num_rows;

if($row > 0){
    echo $row;

}else{
    $conn->close();
    header('Location: ../Index.html' );
}