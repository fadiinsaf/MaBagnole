<?php

require_once __DIR__ . "/../Database/Database.php";
require_once __DIR__ . "/../Models/Category.php";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = (int)$_GET["id"];

    if (Category::delteCategory($id)) {
        header("Location: /Views/adminCategoriesManagment.php");
        exit();
    }

    echo "Error";
    die();
}

header("Location: /Views/adminCategoriesManagment.php");
exit();