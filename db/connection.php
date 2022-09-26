function getConnection()
{
   $dbHost = ("mysql:host=remotemysql.com; dbname=oI1hnpf6R7");
    $dbUser = "oI1hnpf6R7";
    $dbPass = "AV2G75c1w2";
    $conn = new PDO($dbHost, $dbUser, $dbPass);
    return $conn; 
}
