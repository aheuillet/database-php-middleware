<?php
    require 'vendor/autoload.php';

    $HOST = "localhost";
    $PORT = "27017";
    $DATABASE = "vicon";

    $client = new MongoDB\Client("mongodb://" . $HOST . ":" . $PORT);
?>