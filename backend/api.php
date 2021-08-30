<?php 

// stampiamo il json dell'array $arrayDemo
require_once __DIR__ . "/../database/database_demo.php";
require_once __DIR__ . "/../functions/printJson.php";


printJson($arrayDemo);

/*

    header('Content-Type: application/json');  // per dichiarare al client che il nostro contenuto è un json
    echo json_encode($array);      // stampa l'array trasformato in json

    // http://localhost:8888/boolean-live-php/php-api-seconda-parte/api/api.php
*/