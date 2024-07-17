<?php

    define("HOSTNAME","localhost");
    define("USERNAME","pratibha");
    define("PASSWORD","");
    define("DATABASE","crud_operations");

    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    
    if(!$connection){
        die('connection failed');

    }
    // else{
    //     echo "yess";
    // }

?>