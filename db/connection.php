
<?php
function getConnection()
{
   $dbHost = ("mysql:host=localhost; dbname=follownh_test");
    $dbUser = "follownh_hieunguyen";
    $dbPass = "hieunguyn123";
    $conn = new PDO($dbHost, $dbUser, $dbPass);
    return $conn; 
}
