<?php

require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Models/Car.php";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = $_GET["id"];

    if (Car::deleteCar($id)) {
        header("Location: /Views/adminFleetManagment.php");
        exit();
    }

    echo "Error";
    die();
}

header("Location: /Views/adminFleetManagment.php");
exit();