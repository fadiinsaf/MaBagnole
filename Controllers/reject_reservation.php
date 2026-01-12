<?php

require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Models/Reservation.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
    $id = (int)$_GET["id"];

    if ($id <= 0) {
        header("Location: /Views/adminBookingsManagment.php?error=invalid_id");
        exit();
    }

    try{
        Reservation::rejectResrevation($id);
    }
    catch(PDOException $e)
    {
        die("Database Error: " . $e->getMessage());
    }
}

header("Location: /Views/adminBookingsManagment.php");
exit();