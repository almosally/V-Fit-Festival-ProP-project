<?php

$name = "studmysql01.fhict.local";
$user = "dbi362335";
$pass = "123123";
$db = "dbi362335";

try{

    if($conn = mysqli_connect($name, $user, $pass, $db)){

//        echo "connected successfully";

    }
    else
    {
        throw new Exception("No Connection");
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}