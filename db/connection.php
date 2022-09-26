
<?php
function getConnection()
{
   $dbHost = ("mysql:host=103.255.237.74; dbname=follownh_test");
    $dbUser = "follownh_hieunguyen";
    $dbPass = "hieunguyen123";
    $conn = new PDO($dbHost, $dbUser, $dbPass);
    return $conn; 
}
