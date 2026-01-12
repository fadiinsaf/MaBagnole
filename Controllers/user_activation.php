<?php

require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Models/Client.php";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]) && isset($_GET["action"])) {
    $id = (int)$_GET["id"];
    $action = $_GET["action"];

    if ($id <= 0) {
        header("Location: /Views/adminCustomersManagment.php?error=invalid_id");
        exit();
    }

    try{
        switch($action)
        {
            case "activate":

                Client::activateClient($id);
                break;

            case "deactivate":

                Client::deactivateClient($id);
                break;

            default:
                header("Location: /Views/adminCustomersManagment.php?error=invalid_action");
                exit();
        }
        
    }
    catch(PDOException $e)
    {
        die("Database Error: " . $e->getMessage());
    }
}

header("Location: /Views/adminCustomersManagment.php");
exit();