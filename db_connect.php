<?php

    $server = "localhost";
    $user = "root";
    $pw = "";
    $db = "vifter_db";

    $conn = mysqli_connect($server, $user, $pw, $db);

    if(!$conn) {
        echo "Connection failed!";        
    }
