<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "webrayan";
$conn = "";




$conn = mysqli_connect($servername, $username, $password,$db_name);

if (!$conn){
    echo "Er is iets fout gegaan, Ververs de pagina";
}


?>