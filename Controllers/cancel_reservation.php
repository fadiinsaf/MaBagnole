<?php
require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Models/Reservation.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['id'])) {
    $id = (int)$_GET["id"];

    if (Reservation::cancelResrevation($id)) {
        header("Location: /Views/myReservations.php");
        exit();
    }

    echo "Error";
    die();
}

header("Location: /Views/myReservations.php");
exit();