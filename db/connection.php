<?php 
function getConnection()
{
    $dbHost = ("mysql:host=remotemysql.com; dbname=oI1hnpf6R7");
    $dbUser = "oI1hnpf6R7";
    $dbPass = "7AaGzD53vE";
    $conn = new PDO($dbHost, $dbUser, $dbPass);
    
    return $conn; 
}
