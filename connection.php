<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "astroworld";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
    // echo "Connection OK";
}
else
{
    // echo "Connection Failure" .mysqli_connect_error() ;
}

?>