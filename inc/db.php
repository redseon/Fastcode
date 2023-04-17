<?php
    $hostname = 'localhost';
    $dbuserid = 'redseon15';
    $dbpasswd = 'dokjkj124!';
    $dbname = 'redseon15';

    $mysqli = new mysqli($hostname,$dbuserid, $dbpasswd,$dbname);
    if($mysqli -> connect_errno){
        die('Connect Error:'.$mysqli->connect_error);
    } 
    // echo 'connect successfully';
?>