<?php

function dbConnection()
{
    $host = "localhost";
    $dbname = "travel";
    $dbuser = "root";
    $dbpass = "";
    return new PDO("mysql:host=$host;charset=utf8;dbname=$dbname;", $dbuser, $dbpass);
}
