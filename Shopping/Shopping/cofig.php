<?php 
$dbhost="localhost";
$dbser="root";
$dbpass="";
$dbname="shopping";

$conn=mysqli_connect($dbhost,$dbser,$dbpass,$dbname);

if(!$conn){
    die("Could not connect to the database".mysqli_connect_error());
    
}

?>