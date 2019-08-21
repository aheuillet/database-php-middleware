<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require 'database.php';

$collection = $client->selectDatabase($DATABASE)->selectCollection($_POST["collection"]);
$cursor = $collection->find([]);

$response = [];

foreach ($cursor as $document) {
    array_push($response, $document);
};

echo (json_encode($response));

?>