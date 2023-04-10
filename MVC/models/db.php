<?php

function getConnection()
{
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="abd";
    $conn = new mysqli($servername, $username, $password,$dbname);
    return $conn;

}

?>