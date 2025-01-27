<?php
require '/dbconnect/connect.php';
    $connection = new mysqli($host,$username,$passphrase,$database);

if($connection->connect_error){
    die("OOPS some inter error tooks place please try again later.");
}

?>