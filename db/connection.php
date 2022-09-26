<?php 
function getConnection()
{
   $dbHost = ("mysql:host=localhost; dbname=follownh_test");
    $dbUser = "follownh_hieunguyen";
    $dbPass = "DtLay8nDjGG_";
    $conn = new PDO($dbHost, $dbUser, $dbPass);
    return $conn; 
}
