<?php
$server="localhost";
$username ="root";
$password="arun";
$database="plots";
$conn = mysqli_connect($server,$username,$password,$database);

if (!$conn) 
{
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else
{
	echo "Connected Successfully \n";
}
?>