<?php 
function getConnection()
{
    $dbHost = ("mysql:host=sql302.epizy.com; dbname=epiz_32651517_crow");
    $dbUser = "epiz_32651517";
    $dbPass = "H6w2xpE5nwHs4";
    $conn = new PDO($dbHost, $dbUser, $dbPass);
    
    return $conn; 
}
