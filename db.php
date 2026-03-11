<?php

$host="php-mysql-db2.ca7q66ymi677.us-east-1.rds.amazonaws.com";
$user="admin";
$password="Admin1234";
$db="testdb2";

$conn=new mysqli($host,$user,$password,$db);

if($conn->connect_error){
die("Connection failed");
}

?>