<?php

$serverName = "localhost";
$usrName = "root";
$password = "";
$dbName = "zoo";

$con = mysqli_connect($serverName, $usrName, $password, $dbName) or die("error while connecting");