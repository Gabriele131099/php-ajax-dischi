<?php 

// stampiamo il json dell'array $arrayDemo
require_once __DIR__ . "/../database/database.php";
require_once __DIR__ . "/../functions/printJson.php";


printJson($database);
