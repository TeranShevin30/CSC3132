<?php
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','students');

try {
    $connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

    if (!$connect) {
        die("Connection failed");
    } else {
        echo "Connected successfully";
    }
    
} catch (Exeption $e) {
    die($e->getMessage());
}








?>