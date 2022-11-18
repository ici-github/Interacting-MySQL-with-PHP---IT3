<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databasename = "it3_bot_nalang";

    $connection = mysqli_connect($hostname, $username, $password, $databasename);

    if($connection == TRUE) {
        printf("Host information: %s\n ", mysqli_get_host_info($connection));
    }
?>  