<?php

    include_once(__DIR__ . "/../StarWarsConnector.php");

    $connector = new StarWarsConnector;

    $response = $connector->search("Luke");

    echo json_encode(json_decode($response), JSON_PRETTY_PRINT);
